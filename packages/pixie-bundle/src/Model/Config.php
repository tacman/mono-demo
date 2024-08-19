<?php

namespace Survos\PixieBundle\Model;

use Symfony\Component\Yaml\Yaml;

class Config
{
    public function __construct(
        private string|float|null $version=null,
        public ?string $code=null,
        public ?Source $source=null,
        private array $files=[],
        /**
         * @var array<Table>
         */
        private array $tables=[],
        private ?string $configFilename=null,
        private array           $data=[],
        public ?string $dataDir = null, // set in service, kinda hacky
        public ?string $pixieFilename = null // set in service, kinda hacky, the sqlite file

    )
    {
//        if ($this->$configFilename) {
//            $x = $denormalizer->denormalize($configData, Config::class);
//            dd($x, $configData);
//
//            $this->data = Yaml::parseFile($this->filename);
//        }
    }

    public function getSource(): ?Source
    {
        return $this->source;
    }

    public function getDataDir(): ?string
    {
        return $this->dataDir;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function getPixieFilename(): ?string
    {
        return $this->pixieFilename;
    }

    public function setPixieFilename(?string $pixieFilename): self
    {
        $this->pixieFilename = $pixieFilename;
        return $this;
    }

    public function getConfigFilename(): ?string
    {
        return $this->configFilename;
    }
    public function setConfigFilename(?string $configFilename): self
    {
        $this->configFilename = $configFilename;
        return $this;
    }

    public function getIgnored(): array
    {
        $ignore =  $this->source?->ignore;
        if (is_string($ignore)) {
            $ignore = [$ignore];
        }
        return $ignore;
    }
    public function getFileToTableMap(): array
    {
        return $this->files;
    }

    public function getSourceFilesDir(): ?string
    {
        return $this->source?->dir;
    }

    /**
     * @return array<Table>
     */
    public function getTables(): array
    {
        return $this->tables;
    }

    public function getTable(string $tableName): ?Table
    {
        return $this->tables[$tableName] ?? null;
    }

    public function setTables(array $tables): Config
    {
        foreach ($tables as $table) {
            assert($table instanceof Table, "should be a table!");
        }
        $this->tables = $tables;
        return $this;
    }

    public function setFiles(array $files): Config
    {
        $this->files = $files;
        return $this;
    }

    public function setSource(?Source $source): Config
    {
        $this->source = $source;
        return $this;
    }

    public function getTableRules($tableName): array
    {
        return $this->tables[$tableName]->getRules();
    }
    public function getProperties($tableName): array
    {

        return $this->tables[$tableName]->getProperties();
    }

    public function getVersion(): string|float|int
    {
        return $this->version;
    }

    public function rp()
    {
        return ['pixieCode' => $this->code];

    }


}
