<?php

namespace Survos\PixieBundle;

// see https://github.com/bungle/web.php/blob/master/sqlite.php for a wrapper without PDO

use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Schema\Schema;
use JetBrains\PhpStorm\NoReturn;
use \PDO;
use Psr\Log\LoggerInterface;
use Survos\PixieBundle\CsvSchema\Parser;
use Survos\PixieBundle\Model\Config;
use Survos\PixieBundle\Model\Index;
use Survos\PixieBundle\Model\Item;
use Survos\PixieBundle\Model\Property;
use Survos\PixieBundle\Model\Table;
use Symfony\Component\Cache\CacheItem;
use Symfony\Component\PropertyAccess\PropertyAccessor;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;
use Symfony\Component\Stopwatch\Stopwatch;
use function PHPUnit\Framework\directoryExists;
use function Symfony\Component\String\u;

/*
 *
 * https://gist.github.com/sbrl/c3bfbbbb3d1419332e9ece1bac8bb71c
 *
 * a multi-table, multi-lingual Sqlite key-value data store.
 * @license Apache 2.0
 */

class StorageBox
{
    const MODE_REPLACE = 'replace';
    const MODE_NOOP = 'noop';
    const MODE_PATCH = 'patch';
    /**
     * The SQLite database connection.
     * @var \PDO
     */
    private \PDO $db;
    private array $tables = []; // from the config
    private array $schemaTables = []; // from the schema inspection
    private bool $inTransaction = false;
    private ?array                     $regexRules = [];

    /**
     * Initialises a new store connection.
     * @param string $filename The filename that the store is located in.
     * @param array $tablesToCreate The ADDITIONAL tables to create with writing.  Others may already exist.
     */
    #[NoReturn] function __construct(private string                              $filename,
                                     array                                       &$data, // debug data, passed from Pixie
                                     private ?Config                             $config = null, // for creation only.  Shouldn't be in constructor!
//                                     private array                     $tablesToCreate = [],
//                                     private ?array                     $regexRules = [],
                                     private ?string                             $currentTable = null,
                                     private ?int                                $version = 1,
                                     private string                              $valueType = 'json', // eventually jsonb
                                     private bool                                $temporary = false, // nyi
                                     private readonly ?LoggerInterface           $logger = null,
                                     private readonly ?PropertyAccessorInterface $accessor = null,
                                     private array                               $formatters = [],
                                     private readonly ?Stopwatch                 $stopwatch = null,
    private readonly ?string                                                     $pixieCode=null //
    )
    {
        $path = $this->filename;

        // PDO creates the db if it doesn't exist, so check after
        if (!file_exists($path)) {
            $dir = pathinfo($path, PATHINFO_DIRNAME);
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            try {
                $this->db = new \PDO("sqlite:" . $path);
            } catch (\PDOException $e) {
                throw new \LogicException("Invalid database connection: " . $path . "\n\n" . $e->getMessage());
//                dd($path, $e->getMessage());
//                return;
            }
            $this->db->query("PRAGMA journal_mode=WAL");
            $this->db->query("PRAGMA lock_timeout=5");
            $this->db->setAttribute(PDO::ATTR_TIMEOUT, 10);
//            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } else {
            try {
                $this->db = new \PDO("sqlite:" . $path);
            } catch (\PDOException $e) {
                dd($path, $e->getMessage());
                return;

            }
        }

        if ($this->config) {
            $this->createTables($this->config);
        }

    }

    public function getConfig(): ?Config
    {
        if (!$this->config) {
            assert(false, "missing config");
        }
        return $this->config;
    }

    public function getPixieCode(): ?string
    {
        return $this->pixieCode;
    }

    public function createTables(Config $config): void
    {
        if ($this->db->inTransaction()) {
            $this->db->commit();
        }
        $sth = $this->db->query($sql = "SELECT name FROM sqlite_master where type='table'");
        $this->schemaTables = $sth->fetchAll(PDO::FETCH_COLUMN); // load the existing tables

        $this->beginTransaction();
        foreach ($config->getTables() as $tableName => $table) {

            assert($table instanceof Table, json_encode($table));
            if (!in_array($tableName, $this->schemaTables)) {
                $this->createTable($tableName, $table, $this->valueType);
                $this->tables[] = $table;
            }
        }
        $this->commit();
        assert(!$this->db->inTransaction());
    }

    public function addFormatter(callable $callable)
    {
        $this->formatters[] = $callable;
    }

    // @todo: make this an event listener?
    // given the HEADER array, map the key names, for array_combine or csv getRecords
    public function mapHeader(array $header, string $tableName = null, array $regexRules = []): array
    {
        $tableName = $tableName ?? $this->currentTable;
        // $fieldName is the attribute (json) or column name (csv)
        $newHeaders = [];
//        $regexRules = $this->regexRules[$tableName] ?? [];
//        dd(tableName: $tableName, regex: $regexRules);
        foreach ($header as $fieldName) {
            $newFieldName = trim($fieldName);
            foreach ($regexRules as $regex => $value) {
//                assert($regex, $regex);
//                dump($regex, $this->regexRules);
//                assert(preg_match($regex, ''), $regex);
                if (preg_match($regex, $fieldName, $mm)) {
                    $newFieldName = $value; // @todo: apply a function or rule
                    break; // match first rule only
                }
            }
            $newHeaders[] = u($newFieldName)->snake()->toString();
        }
        return array_combine($newHeaders, $header);
    }

    public function getColumnMap()
    {
        // ugh, complicated


    }

    public function select(string $tableName): self
    {
        $tables = $this->getTableNames(); // not cached!
        assert(count($tables), "no tables in $this->filename");
        if (!in_array($tableName, $tables)) {
            throw new \LogicException("$tableName $this->filename is not in tables:\n\n" . join("\n", $tables));
        };
        $this->currentTable = $tableName;
        return $this;

    }

    public function getVersion(): string
    {
        return "1.0";
    }

    /**
     * @param array $regexRules sequence of rules to rename columns
     * @param array $tables select which columns to apply this to.
     * @return void
     */
    public function map(array $tableRegexRules, array $tables = ['__all'])
    {
        // __all is special key for all tables
        foreach ($tables as $table) {
            $this->regexRules[$table] = $tableRegexRules;
        }
    }

    public function getPrimaryKey(string $tableName): string
    {
        $tableName = $tableName ?? $this->currentTable;
        assert($tableName);
        // https://stackoverflow.com/questions/10472103/sqlite-query-to-find-primary-keys
        // use <> 0 if multiple
        $result = $this->query($sql = "SELECT l.name FROM pragma_table_info('$tableName') 
    as l WHERE l.pk = 1");
        $pk = $result->fetchColumn();
        assert($pk, $tableName . $sql);
//dd($result->fetchColumn(), $result);
        return $pk;
//dd($result->fetchColumn(), $result->fetchAll(), $tableName, $sql);
//
//        $schemaTables = $this->inspectSchema();
//        $table = $schemaTables[$tableName] ?? null;
//
//        return $table?->getPkName();

    }


    /* get the DBAL schema.
     *
     */
    public function inspectSchema(string $filename = null): array
    {
        $filename = $filename ?? $this->getFilename();

        static $tables = [];
        if (array_key_exists($filename, $tables) && count($tables[$filename])) {
            return $tables[$filename];
        }

        // ripe for caching, refactoring, etc.
        // is it necessary to open it again, or can we get this from the PDO?
        $connectionParams = [
            'path' => $filename,
            'driver' => 'pdo_sqlite',
        ];
        $conn = DriverManager::getConnection($connectionParams);
//            dump($connectionParams, $filename);
        $sm = $conn->createSchemaManager();
        $fromSchema = $sm->introspectSchema();

        $tables[$filename] = [];

        foreach ($fromSchema->getTables() as $schemaTable) {
            $primaryIndex = $schemaTable->getIndex('primary');
            //
            $table = new Table($schemaTable->getName(),
                $schemaTable->getColumns(),
                pkName: join('-', $primaryIndex->getColumns()));
//                foreach ($schemaTable->getColumns() as $column) {
//                    $tables[$schemaTable->getName()]['columns'][] = $column->getName();
//                }
            $tables[$filename][$schemaTable->getName()] = $table;
        }
//            dd($fromSchema, $tables);
        try {
        } catch (\Exception $exception) {
            dd($exception, $filename);
        }
        return $tables[$filename];
    }


    /**
     * @param string|array $indexConfig
     * @return Index[] array
     */
    static function getIndexDefinitions(null|string|array $indexConfig): array
    {

        $indexes = [];
        if (empty($indexConfig)) {
            return $indexes;
        }
        if (is_string($indexConfig)) {
            $indexConfig = array_map(fn($key) => $key ? trim($key) : assert($key, "empty key! " . $indexConfig),
                explode(',', $indexConfig));
        }

        $primaryIndex = 0; // by default
        foreach ($indexConfig as $indexId => $indexName) {
            if (is_array($indexName)) {

                dump($indexConfig, $indexName, $indexId);
                assert(false);
                // parse type and maybe regex rule
                continue;
            }

            // pk is first unique key (or first key).  option to use rowid?
            if (!$primaryIndex && str_starts_with($indexName, '&')) {
                $primaryIndex = $indexId;
            }
            if (str_contains($indexName, '|')) {
                [$indexName, $type] = explode('|', $indexName);
            } else {
                $type = 'TEXT';
            }

            // break the string up into the index model
            $index = new Index($indexName, $type, isUnique: str_starts_with($indexName, '&'));
            $indexes[] = $index;
        }

        // set primary and unique
        $indexes[$primaryIndex]->isPrimary = true;

        return $indexes;

    }

    /**
     * @param string $tableName
     * @param string|array Index[] $indexes
     * @param string $valueType
     * @return void
     */
    public function createTable(string $tableName,
                                Table  $table,
                                string $valueType = 'JSON',
//        array $columns=[]
    ): void
    {
        $columns = [];
        $indexes = $this->getIndexDefinitions($table->getIndexes());
        $properties = [];
        // by this point, the table properties are already objects
        // really it's propertyDataArray

        // more json examples at https://www.sqlitetutorial.net/sqlite-json/
        $indexSql = [];
        // @todo: improve PK: https://www.sqlitetutorial.net/sqlite-primary-key/
        // a generated column can't be the primary key, but interesting: https://sqlite.org/forum/info/5928225848d0409f
        if (count($indexes)) { // && count($properties)) {
            dd("Cannot have both indexes and properties  {$this->pixieCode} {$tableName}: " . $table->getIndexes());
        }

        $propertyIndexes = [];
        foreach ($table->getProperties() as $property) {
            assert($property::class === Property::class);
            // hack, property->setIndex would be better.
            if ($property->getIndex()) {
                $propertyIndexes[$property->getCode()] = new Index($property->getCode(),
                    isPrimary: $property->getIndex() === 'PRIMARY');
            }
            $properties[] = $property; // now with the index
        }
//        dd($tableName, $indexes);
        /**
         * @var int $indexId
         * @var Index $index
         */
        foreach ($properties as $idx => $property) {
            $name = $property->getCode();
            $index = $propertyIndexes[$name] ?? null;
            // @todo: handle auto-increment
            if ($index) {
                $type = $property->getType();
                if ($index->isPrimary) {
                    $primaryKey = "$name $type PRIMARY KEY";
                    $columns[$name] = $primaryKey;
                    continue; // we don't need an explicit index
                }
            }

            // also see json_each example at https://sqlime.org/#deta:m97q76wmvzvd
            // create a generated column so that it all happens internally
            // json_extract('{"a":"xyz"}', '$.a') → 'xyz'
//                https://www.sqlite.org/gencol.html

            // d INT GENERATED ALWAYS AS (a*abs(b)) VIRTUAL,
            $columns[$name] = "$name " . ($property->getType() ?? 'TEXT');
            if ($default = $property->getInitial()) {
                $columns[$name] .= sprintf(' DEFAULT %s ', is_string($default) ? sprintf('"%s"', $default) : $default);
            }
            if ($property->generated) {
                $columns[$name] .= " GENERATED ALWAYS AS (json_extract(_raw, '\$.$name')) STORED /* @searchable */";
            }
            if ($index) {
                $indexSql[$tableName . $name] = "create index {$tableName}_{$name} on $tableName($name) /* @filterable */";
            }
        }
        $columns['_att'] = '_att TEXT'; // type=att
        $columns['json'] = '_extra TEXT'; // original data minus defined properties
        $columns['raw'] = '_raw TEXT'; // original data sent to ->set()

//        dd($tableConfig);
//        array_unshift($columns, $primaryKey);

        $sql = sprintf("CREATE TABLE IF NOT EXISTS %s (\n%s\n); \n\n%s", $tableName,
            join(",\n", array_values($columns)),
            join(";\n", array_values($indexSql))
        );
//        dd($sql);
//        dd($columns, $indexSql, $sql, $primaryKey);
        try {
            $result = $this->db->exec($sql);
        } catch (\Exception $exception) {
            dd($exception, $sql, $columns, $indexSql);
        }
//        dd($sql, $result, $indexes);
        // still in a transaction, can't do this yet, wait until all tables are created.

//        assert($this->getPrimaryKey($tableName), "missing pk " . $sql);
//        if (str_contains($sql, 'student')) dd($sql, $result);
//        dd($sql);
    }

    private function log($msg)
    {
        $this->logger->warning($msg);
        if ($this->logger) {
        }

    }

    public function close()
    {
//        $this->log(__METHOD__);
        // if a transaction, commit it
        if ($this->db->inTransaction()) {
            $this->commit();
        }
        unset($this->db);
    }

    public function beginTransaction()
    {
//        $this->log(__METHOD__);
//        assert(!$this->db->inTransaction(), "already in a transaction");
        if (!$this->db->inTransaction()) {
            $this->db->beginTransaction();
        }
    }

    public function getFilename(): string
    {
        return $this->filename;
    }

//    public function getItem(string $key): CacheItem
//    {
//        $item = new CacheItem();
//    }
    /**
     * Makes a query against the database.
     * @param string $sql The (potentially parametised) query to make.
     * @param array $variables Optional. The variables to substitute into the SQL query.
     * @return    \PDOStatement        The result of the query, as a PDOStatement.
     */
    protected function query(string $sql, array $variables = []): \PDOStatement
    {
        static $preparedStatements = [];
        // cache prepared statements
        if (empty($preparedStatements[$this->filename][$sql])) {
            try {
                $preparedStatements[$this->filename][$sql] = $this->db->prepare($sql);;
            } catch (\Exception $exception) {
                dump($exception, $sql, $this->filename, $variables);
                assert(false, $sql . " " . $exception->getMessage());
            }
        }
        $statement = $preparedStatements[$this->filename][$sql];
        $statement->execute($variables);

        return $statement; // fetchColumn(), fetchAll(), etc. are defined on the statement, not the return value of execute()
    }

    /**
     * Determines if the given key exists in the store or not.
     * @param string $key The key to test.
     * @return    bool    Whether the key exists in the store or not.
     */
    public function has(string $key, string $table = null, bool $preloadKeys = false): bool
    {
        static $keyCache = [];
        $table = $table ?? $this->currentTable;
        $pk = $this->getPrimaryKey($table);

        if ($preloadKeys) {
            if (empty($keyCache[$table])) {
                $keyCache[$table] = $this->query("SELECT $pk from $table")->fetchAll(PDO::FETCH_COLUMN);
            }
            return in_array($key, $keyCache[$table]);
        }

        //
        // SELECT exists(SELECT 1 FROM users WHERE username = 'john_doe') AS row_exists;
        // https://stackoverflow.com/questions/9755860/valid-query-to-check-if-row-exists-in-sqlite3
        return $this->query(
                "SELECT COUNT($pk) FROM $table WHERE $pk = :key",
                ["key" => $key]
            )->fetchColumn() > 0;
    }

    public function count(string $table = null, array $where=[]): int
    {
        assert(!$this->db->inTransaction(), "already in a transaction");
        $table = $table ?? $this->currentTable;
        $pk = $this->getPrimaryKey($table);
        $sql =  "SELECT COUNT($pk) FROM $table";
        if (count($where) > 0) {
            $sql .= " WHERE ";
            foreach ($where as $key => $value) {
                $sql .= " $key = :$key";
            }
        }
        $count = $this->query($sql, $where)->fetchColumn();
        $this->log("$table has $count " . json_encode($where));
        return $count;
        try {
        } catch (\Exception $exception) {
            dd($sql, $exception);
        }
    }


    public function getSelectedTable(): ?string
    {
        return $this->currentTable;
    }

    public function hasTable($tableName): bool
    {
        return in_array($tableName, $this->getTables());

    }

    /**
     * Gets a value from the store.
     * @param string $key The key to store the value under.
     * @return    string    The value to store.
     */
    public function get(string $key, string $tableName = null): ?Item // string|object|array|null
    {
        $tableName = $tableName ?? $this->currentTable;
        $keyName = $this->getPrimaryKey($tableName);
        $results = $this->query(
            sprintf("SELECT * FROM %s WHERE $keyName = :key;", $tableName),
            ["key" => $key]
        )->fetchObject();
        assert($results, "\nno record for [$key] in table [$tableName]\n");
        if ($results) {
            $marking = $results->marking??null;
            // hack for workflow, ugh. Could generalize with properties, casting, etc.
            // the _raw is really the data!
            $raw = $results->_raw;
            // there may be a way in sqlite to return this already parsed.
            if (is_string($raw)) {
                $raw = json_decode($raw);
            }
            return new Item($raw,$key, $tableName, $this->getPixieCode(), marking: $marking);
        } else {
            return null;
        }
    }

    /**
     * Sets a value in the data store.
     * @param string $key The key to set the value of.
     * @param string $value The value to store.
     * @param string $propertyName If set, update the property, not _raw
     */
    public function set(array|object|string $value, string $tableName = null,
                        string|int|null $key = null, string $propertyName = null,
    string $mode='replace' // _raw, if patch then read first and merge
    ): mixed
    {
        $previousTable = $this->currentTable;
        $tableName = $tableName ?? $this->currentTable;
        assert($tableName, "missing tablename in call");
        if (!$propertyName) {
            assert(is_object($value) || is_iterable($value), "if property is not set, must be iterable");
        }
        static $preparedStatements = [];

        $schema = $this->inspectSchema();
        assert(array_key_exists($tableName, $schema), "no table $tableName in schema " . $this->getFilename());
        /** @var Table $table */
        $table = $schema[$tableName];
        assert($table, "No table $tableName");
        $keyName = $table->getPkName();

        if ($mode === self::MODE_PATCH) {
            $data = $this->get($key, $tableName)->getData();
            $value = array_merge((array)$data, $value);
        }
        if ($propertyName) {
            assert(false, "propertyName may need some attention");
            $updateKey = $tableName . '_' . $propertyName;
            if (empty($preparedStatements[$updateKey])) {
                $preparedStatements[$updateKey] =
                    $this->db->prepare("
                    UPDATE $tableName set $propertyName = :value WHERE {$keyName} = :key
                ");
            }
            $statement = $preparedStatements[$updateKey];
            $results = $statement->execute(
                $params = [
                    'key' => $key,
                    "value" => is_string($value) ? $value : json_encode($value)
                ]);

        } else {
            // update _raw, the json blob

            // @todo: strings require a key, probably another method
            if (is_object($value)) {
                $value = (array)$value;
            }
            if (is_array($value) && !array_key_exists($keyName, $value)) {
                throw new \LogicException("Missing key $keyName in document " . join("\n", array_keys($value)));
                dd($table, $value, $keyName, $tableName);
            }
            $value = (array)$value; // if JSON
            assert(array_key_exists($keyName, $value),
                "$keyName missing $tableName in " . join(',', array_keys($value)));
            if (!$key) {
                $key = is_array($value) ? $value[$keyName] : $value->$keyName;
//            $accessor->getValue($value, $keyName);
//            dd($key, $keyName, $value);
                // must come from the value blob
            }
            if (empty($preparedStatements[$tableName])) {
                $preparedStatements[$tableName] =
                    $this->db->prepare("
                    INSERT OR REPLACE INTO $tableName($keyName, _raw) 
                        VALUES(:key, :value)
                ");
            }
//        dd($value, $key, $tableName);
            $statement = $preparedStatements[$tableName];
            assert($this->db->inTransaction(), "not in a transaction for the update");
            assert(!array_key_exists('_raw', $value), "Do not add _raw to _raw!");
            try {
                $results = $statement->execute(
                    $params = [
                        'key' => $key,
                        "value" => is_string($value) ? $value : json_encode($value)
                    ]);
//                if ($mode === self::MODE_PATCH) dd($key, $value);
//            $this->db->commit();
//        assert(false);

            } catch (\Exception $exception) {
                if ($exception->getCode() === 'HY000') {
                    // locked
                    throw new \Exception($this->filename . " is locked \n\n" . $exception->getMessage());
                } else {
                    dd($exception, $params, $value, $preparedStatements, $tableName);
                }
            }
            if (!$results) {
                dd("Error: " . $statement->errorInfo()[2]);
            }
        }

        $this->currentTable = $previousTable;

        return $results;
    }

    /**
     * Deletes an item from the data store.
     * @param string $key The key of the item to delete.
     * @return    bool    Whether it was really deleted or not. Note that if it doesn't exist, then it can't be deleted.
     */
    public function delete(string $key, string $table = null): bool
    {
        $tableName = $table ?? $this->currentTable;
        return $this->query(
                sprintf("DELETE FROM %s WHERE %s = :key;",
                    $tableName,
                    $this->getPrimaryKey($tableName)),
                ["key" => $key]
            )->rowCount() > 0;
    }

    /**
     * Empties the store.
     */
    public function clear(): void
    {
        $this->query("DELETE FROM $this->currentTable;");
    }

    public function getSql(string $table, array $where = [], array $order=[], int $startingAt=0, int $max = 0): array
    {
        // @todo: only prepare the statement once
        $sql = "select * from " . ($table ?? $this->currentTable);

        // @todo: prepared statement and bind values.
        $sql .= " where 1=1";

        // dexie format: .where('myField').equals(1) .where('myField').gt(5)
        // where returns a collection (promise) with no objects. https://dexie.org/docs/Collection/Collection
        // pass a tuple with operator?  or a string?  I think that's how api grid works.
        $params = [];
        foreach ($where as $key => $value) {
            if ($value === null) {
                $sql .= " and ($key IS NULL)";
            } else {
                $sql .= " and " . $key . " = :$key";
                $params[$key] = $value;
            }
        }
        if (count($order) == 0) {
            $order = [$this->getPrimaryKey($table) => 'ASC'];
        }
        foreach ($order as $key => $value) {
            $sql .= " order by $key $value";
        }
        if ($startingAt > 0) {
            $sql .= " OFFSET " . $startingAt;
        }
        if ($max > 0) {
            $sql .= " limit " . $max;
        }
        return [$sql, $params];

    }

    public function iterate(string $table = null,
                            ?array $where = [],
                            array $order = [],
                            ?bool  $associative = null,
                            int    $depth = 512,
                            int    $flags = PDO::FETCH_ASSOC,
                            int    $max = 0
    ): \Generator
    {
        $table = $table ?? $this->currentTable;
        assert($table, "no table configured");
        $pkName = $this->getPrimaryKey($table);
        [$sql, $params] = $this->getSql($table, $where, $order, max: $max);


        // https://stackoverflow.com/questions/78623214/using-a-generator-to-loop-through-an-update-a-table-in-pdo
        $sth = $this->query($sql, $params);
        $all = $sth->fetchAll($flags);
        if (count($all) === 0) {
            return;
        }

        foreach ($all as $idx => $row)
//        foreach ($sth as $idx => $row)
//        while ($row = $sth->fetch(PDO::FETCH_ASSOC))
        {
//            dd($idx, $row);
            // can 'value' be configured?  _raw
            // @todo: lax, strict, none (handle _raw, _value, etc. )
            // value is deprecated!
            if ($value = $row['_raw'] ?? null) {
//            dump($value);
                $value = json_decode($value, $associative, $depth, $flags);
                unset($row['_raw']);
                $value = array_merge((array)$value, $row);
            }
            // now merge with the keys
//            dd($value);
            // check, or is the value always json?
            $key = $value[$pkName] ?? null;
//            dd($value, $table, $key);
            $item =  $value ? new Item((object)$value, $key, $table, $this->getPixieCode()) : null;
//dd($item, $value);
            yield $row[$pkName] => $item;
        }
    }

    public function iterateOver(string $table = null, callable $callback, ?bool $associative = null, int $depth = 512, int $flags = 0): array
    {
        $results = [];
        foreach ($this->iterate($table, $associative, $depth, $flags) as $key => $value) {
            $results[$key] = $callback($key, $value);
        }
        return $results;
    }

    public function getKeys(string $tableName = null): array
    {
        $tableName = $tableName ?? $this->currentTable;
        assert($tableName, "no table configured");
        $primaryKey = $this->getPrimaryKey($tableName);
        $sth = $this->query("select $primaryKey from $tableName");
        return $sth->fetchAll(PDO::FETCH_COLUMN);
    }

    /**
     * @return array<string>
     */
    public function getTableNames(): array
    {
//        assert(false, $this->filename);
        $sth = $this->query("SELECT name FROM sqlite_master WHERE type='table';");
        $tableNames = $sth->fetchAll(PDO::FETCH_COLUMN);
        return $tableNames;
    }

    /**
     * @return array<Table>
     */
    public function getTables(): array
    {
        return $this->getConfig()->getTables();
    }

    public function getTable(string $tableName): Table
    {
        return $this->getConfig()->getTables()[$tableName];

    }

    public function tableExists(string $table): bool
    {
        $sth = $this->query("SELECT * FROM sqlite_master WHERE name='$table' and type='table';");
        return count($sth->fetchAll(PDO::FETCH_COLUMN)) > 0;
    }

    public function getCounts(string $column, string $table = null, int $limit = 15): array
    {
        $tablename = $table ?? $this->currentTable;
        $sql = "SELECT COUNT(rowid) as count, $column as value
FROM $tablename
GROUP BY $column
";
        $sql .= " ORDER BY COUNT(rowid) DESC";
        if ($limit) {
            $sql .= " LIMIT " . $limit;
        }

        $sth = $this->query($sql);
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getIndexes(string $table = null): array
    {
        $sth = $this->db->query($sql = "SELECT * FROM sqlite_master where type='index'");
        $indexes = [];
        foreach ($sth->fetchAll(PDO::FETCH_ASSOC) as $item) {
            // auto-inc has no sql
            $itemTableName = $item['tbl_name'];
            if ($item['sql'] && ($itemTableName === $table)) {
                $indexes[] = str_replace($itemTableName . '_', '', $item['name']);
            }

        };
        return $indexes;

    }

    public function commit()
    {
//        $this->log(__METHOD__);
        // we could check the db, too
        assert($this->db->inTransaction(), "NOT in a transaction");
        $this->db->commit();
        assert(!$this->db->inTransaction(), "STILL in a transaction");
    }

}
