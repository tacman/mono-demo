<?php

namespace Survos\PixieBundle\Command;

use App\Metadata\PixieInterface;
use App\Service\TranslationService;
use Meilisearch\Endpoints\Indexes;
use Psr\Log\LoggerInterface;
use Survos\ApiGrid\Service\MeiliService;
use Survos\CoreBundle\Service\SurvosUtils;
use Survos\PixieBundle\Event\IndexEvent;
use Survos\PixieBundle\Event\StorageBoxEvent;
use Survos\PixieBundle\Model\Config;
use Survos\PixieBundle\Service\PixieService;
use Survos\PixieBundle\Service\PixieImportService;
use Survos\PixieBundle\StorageBox;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Intl\Locales;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\String\Slugger\AsciiSlugger;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Yaml\Yaml;
use Zenstruck\Console\Attribute\Argument;
use Zenstruck\Console\Attribute\Option;
use Zenstruck\Console\InvokableServiceCommand;
use Zenstruck\Console\IO;
use Zenstruck\Console\RunsCommands;
use Zenstruck\Console\RunsProcesses;
use function Symfony\Component\DependencyInjection\Loader\Configurator\iterator;

#[AsCommand('pixie:index', 'create a Meili index"')]
final class PixieIndexCommand extends InvokableServiceCommand
{
    use RunsCommands;
    use RunsProcesses;

    private bool $initialized = false; // so the event listener can be called from outside the command
    private ProgressBar $progressBar;

    public function __construct(
        private LoggerInterface       $logger,
        private ParameterBagInterface $bag,
        private readonly PixieService $pixieService,
        private SerializerInterface $serializer,
        private EventDispatcherInterface $eventDispatcher,
        private ?MeiliService $meiliService = null,
        private ?SluggerInterface $asciiSlugger = null,
        #[Autowire('%kernel.enabled_locales%')] private array $enabledLocales=[],
    )
    {

        parent::__construct();
    }

    public function __invoke(
        IO                                                                             $io,
        PixieService                                                                   $pixieService,
        PixieImportService                                                             $pixieImportService,
        #[Argument(description: 'config code')] ?string                                $configCode,
        #[Argument(description: 'sub code, e.g. musdig inst id')] ?string              $subCode=null,
        #[Option('dir', description: 'dir to pixie')] string                           $dir=null,
        #[Option('table', description: 'table name(s?), all if not set')] string       $tableFilter=null,
//        #[Option(name: 'trans', description: 'fetch the translation strings')] bool $addTranslations=false,
        #[Option(description: "reset the meili index")] ?bool                          $reset=null,
        #[Option(description: "wait for tasks to finish")] ?bool                          $wait=null,
        #[Option(description: "max number of records per table to export")] int        $limit = 0,
        #[Option(description: "extra data (YAML), e.g. --extra=[core:obj]")] string    $extra = '',
        #[Option('batch', description: "max number of records to batch to meili")] int $batchSize = 1000,

    ): int
    {
        $configCode ??= getenv('PIXIE_CODE');
        if (is_null($reset)) {
            $reset = true;
        }

        if (!$this->meiliService) {

            $io->error("Run composer require survos/api-grid-bundle");
            return self::FAILURE;
        }

        $this->initialized = true;
        $kv = $pixieService->getStorageBox($configCode, $subCode);
        $pixieDbName = $pixieService->getPixieFilename($configCode, $subCode);
//        assert(realpath($pixieDbName) == $kv->getFilename(), "$pixieDbName <> " . $kv->getFilename());
        $io->title("Reading $pixieDbName");
        $config = $pixieService->getConfig($configCode);

        if ($tableFilter) {
            assert($kv->tableExists($tableFilter), "Missing table $tableFilter: \n".join("\n", $kv->getTableNames()));
        }


        $recordsToWrite=[];
        // now iterate
        foreach ($kv->getTables() as $tableName => $table) {
            if ($tableFilter && ($tableName <> $tableFilter)) {
                continue;
            }

            if ($kv->count($tableName) == 0) {
                $this->io()->warning("Skipping $tableName (no records)");
                continue;
            }

            $indexName = $this->meiliService->getPrefixedIndexName(PixieService::getMeiliIndexName($configCode, $subCode, $tableName));
            $io->title($indexName);

            if ($reset) {
                $this->io()->warning("resetting $indexName");
                $this->meiliService->reset($indexName);
            }

            $index = $this->configureIndex($config, $indexName, $tableName);
//            $task = $this->waitForTask($this->getMeiliClient()->createIndex($indexName, ['primaryKey' => Instance::DB_CODE_FIELD]));

            // yikes, we need to configure all facets unless we have a different index for each table

            $progressBar = new ProgressBar($io, $kv->count($tableName));
            $primaryKey = 'pixie_key'; // $kv->getPrimaryKey($tableName); // ??
            $count = 0;
            $batchCount = 0;

            // first, fetch all the translations



//            $transKv = $this->pixieService->getStorageBox($pixieCode, $this->pixieService->getPixieFilename());
//            $transKv = $this->translationService->getTranslationStorageBox($pixieCode);
//            $tKvConfig = $tKv->getConfig();

            if (class_exists('App\\Service\\TranslationService::class')) {
                $transKv = $this->eventDispatcher->dispatch(new StorageBoxEvent(
                    $configCode,
                    isTranslation: true,
                    tags: ['fetch']
                ))->getStorageBox();
                // hack until we get a translation bundle working
                $transKv->select('libre');
//                $transKv->select(TranslationService::ENGINE);
            } else {
                $transKv = null;
            }
            foreach ($kv->iterate($tableName) as $idx => $row) {
                $data = $row->getData();
                $this->logger->info($row->getKey() . "\n\n" . json_encode($row, JSON_PRETTY_PRINT + JSON_UNESCAPED_SLASHES));
                // hack
                $lang = $row->expected_language()??$config->getSource()->locale;
//                dd($lang, $row);
//                foreach ($table->getTranslatable() as $translatableProperty) {
//                    $toTranslate[] = $row->{$translatableProperty}();
//                }
//
                // @todo: optimize fetches
                // moved to pixie:translation, add it in the pixie itself
//                if ($addTranslations) {
//                    foreach ($table->getTranslatable() as $translatableProperty) {
//                        $data->_translations=[];
//                        if ($textToTranslate = $row->{$translatableProperty}()) {
//                            $toTranslate[] = $textToTranslate;
//                            $key = TranslationService::calculateHash($textToTranslate, $lang);
//                            // @todo: batch keys with "in"
//                            $translations = $transKv->iterate(where: ['hash' => $key]);
////                            dd(iterator_to_array($translations), $textToTranslate,  $key, $transKv->getFilename());
//                            foreach ($translations as $translation) {
//                                $data->_translations[$translation->target()][$translatableProperty] = $translation->text();;
//                            }
//                        }
//                    }
////                    dd($data, $data->_translations);
//                    unset($data->translations);
//                }
                // this is the data we got when inserting the original text
//                dd($data);

//                if (array_key_exists('keyedTranslations', $data)) {
//                    $data['_translations'] = $data['keyedTranslations'];
//                    $data['targetLocales'] = array_keys($data['_translations']);
////                unset($data['keyedTranslations']);
//                }

                // slugify the pixie key, which might be a filename like obj1.jpg
                $data->pixie_key = $this->asciiSlugger->slug($row->getKey())->toString();

                // or add the table_name to the key if multiple tables exist in one index.
//                $data->pixie_key = $this->asciiSlugger->slug(sprintf("%s_%s", $tableName, $row->getKey()))->toString();

                $data->coreId = $tableName;
                $data->table = $tableName;
                $data->rp = [
                    'pixieCode' =>  $configCode,
                    'tableName'  =>  $tableName,
                    'key'       =>  $row->getKey(),
                ];
                SurvosUtils::cleanNullsOfObject($data);
                // argh, sqlite thing for arrays
                foreach ($data as $k => $v) {
                    if (is_string($v) && json_validate($v)) {
                        $data->{$k} = json_decode($v);
                        assert($data->{$k}, $k . " is empty");
                    }
                }

//                $tableName=='obj' && dd($data->mat);

                $recordsToWrite[] = $data;
//                $row->getKey() == 56185 && dd(dataToWrite: $data, row: $row;
//                if (++$batchCount >= $batchSize) {
//                    $batchCount = 0;
//                    $index->addDocuments($recordsToWrite);
//                    dd($recordsToWrite);
//                    $recordsToWrite = [];
//                }

                if ($batchSize && (($progress = $progressBar->getProgress()) % $batchSize) === 0) {
                    $task = $index->addDocuments($recordsToWrite, $primaryKey);
                    // wait for the first record, so we fail early and catch the error, e.g. meili down, no index, etc.
                    if ($wait || !$progress) {
      //                $this->io->writeln("Flushing " . count($records));
                        $results = $this->meiliService->waitForTask($task, dataToDump: $recordsToWrite);
                    } else {
//                        dump($task, count($recordsToWrite), $primaryKey);
                    }
                    $recordsToWrite = [];
                }
                $progressBar->advance();
                if ($limit && (++$count >= $limit)) {
                    break;
                }
            }
            $progressBar->finish();

            $task = $index->addDocuments($recordsToWrite, $primaryKey);
            $recordsToWrite = [];
            $this->meiliService->waitForTask($task);

            // wait, so we can update owner
            // export property counts to kv
            $stats = $index->stats();
            assert(!$stats['isIndexing']);
            unset($stats['isIndexing']);
//            dd($stats, $index->getSettings());
            $io->success($stats['numberOfDocuments'] . " $configCode.$tableName documents");
            $this->eventDispatcher->dispatch(new IndexEvent($configCode,
                $subCode,
                $kv->getFilename(),
                $tableName, $stats));

            $table = new Table($this->io());
            $table->setHeaders(['attributes', 'value']);
//            $io->write(json_encode($stats, JSON_PRETTY_PRINT));
            foreach ($index->getSettings() as $var=>$value) {
                if (str_contains($var, 'Attributes')) {
                    $table->addRow([$var, json_encode($value)]);
                }
            }
            $table->render();
            if ($io->isVerbose()) {
//                $io->write(json_encode($index->getSettings(), JSON_PRETTY_PRINT));
            }

//            $filename = $pixieCode . '-' . $tableName.'.json';
//            file_put_contents($filename, $this->serializer->serialize($recordsToWrite, 'json'));
//            $io->success(count($recordsToWrite) . " indexed meili $indexName");
        }

//        dump($configData, $config->getVersion());
//        dd($dirOrFilename, $config, $configFilename, $pixieService->getPixieFilename($configCode));

        // Pixie databases go in datadir, not with their source? Or defined in the config



        $io->success(sprintf("%s success %s %s",  $this->getName(), $configCode, $pixieDbName));
        return self::SUCCESS;
    }

    private function configureIndex(Config $config, string $indexName, ?string $tableName=null): Indexes
    {

        $primaryKey = 'pixie_key';
        $index = $this->meiliService->getIndex($indexName, $primaryKey);
        $filterable = ['table'];
        $sortable = ['id']; // hack

        // foreach ($config->getTables() as $table)
        $table = $config->getTable($tableName);
        {

            foreach ($table->getProperties() as $property) {
                $code = $property->getCode();
                // the table pk is renamed to {tableName}_{pk}
                if ($property->getIndex() === 'PRIMARY') {
                    // skip for now
                } elseif ($property->getIndex() == 'INDEX') {
                    $filterable[] = $code;
                    $sortable[] = $code;
                }
            }
        }
        $map = [
            'es' => 'spa',
            'en' => 'eng',
            'de' => 'deu',
            'hi' => 'hin',
            'fr' => 'fra',
            'da' => 'dan',
        ];
        $searchableAttrs = [];
        $localizedAttributes = [];
        foreach ($this->enabledLocales as $locale) {
            $locale3 = $map[$locale];
            $localizedAttributes[] = ['locales' => [$locale3],
                'attributePatterns' => [sprintf('_translations.%s.*',$locale)]];
            foreach ($table->getTranslatable() as $property) {
                $searchableAttrs[] = '_translations.' . $locale . ".$property";
            }
        }

//        $localizedAttributes[] = ['locales' => [], 'attributePatterns' => ['*']];

        $results = $index->updateSettings($settings = [
            'displayedAttributes' => ['*'],
            'searchableAttributes' => $searchableAttrs,
// when v10 is installed!!
            'localizedAttributes' => $localizedAttributes,
            'filterableAttributes' => $filterable, //  $this->datatableService->getFieldsWithAttribute($settings, 'browsable'),
            'sortableAttributes' => $sortable, // this->datatableService->getFieldsWithAttribute($settings, 'sortable'),
                "faceting" => [
        "sortFacetValuesBy" => ["*" => "count"],
        "maxValuesPerFacet" => $this->meiliService->getConfig()['maxValuesPerFacet']
    ],
            ]);
//        dd($results, $settings);
        // wait until the index is set up.
//        $stats = $this->meiliService->waitUntilFinished($index);
        return $index;
    }



}
