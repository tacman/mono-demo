<?php

namespace Survos\PixieBundle\Service;

// see https://github.com/bungle/web.php/blob/master/sqlite.php for a wrapper without PDO

use Psr\Log\LoggerInterface;
use Survos\PixieBundle\Debug\TraceableStorageBox;
use Survos\PixieBundle\Model\Config;
use Survos\PixieBundle\Model\Source;
use Survos\PixieBundle\Model\Table;
use Survos\PixieBundle\StorageBox;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Finder\Finder;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Stopwatch\Stopwatch;
use Symfony\Component\Yaml\Yaml;


class PixieService
{
    // cache, indexed by filename
    private array $storageBoxes = [];

    public function __construct(
        private bool                                        $isDebug,
        private array                                       $data=[],
        private string                                      $extension = "pixie.db",
        private string                                      $dbDir='pixie',
        private string                                      $dataRoot='data',
        private string                                      $configDir='config/packages/pixie',
        #[Autowire('%kernel.project_dir%')] private ?string $projectDir=null,
        private ?LoggerInterface                            $logger=null,
        private ?Stopwatch                                  $stopwatch=null,
        private ?PropertyAccessorInterface                  $accessor=null,
        private ?SerializerInterface $serializer=null,
        private ?DenormalizerInterface $denormalizer=null,
    )
    {
//        dd($this->serializer->denormalize($this->data, Config::class));
//        assert($this->logger);
        $this->denormalizer=$this->serializer; // ->denormalize($this->data, DenormalizerInterface::class);
    }

    public function getPixieFilename(string $pixieCode): string
    {
        $filename = $this->getPixieDbDir() . "/$pixieCode.{$this->extension}";

        if (file_exists($filename)) {
            $filename = realpath($filename);
        }
        return $filename;

    }

    private function resolveFilename($filename, string $type=null): ?string
    {

        if ($type && ($filename && !file_exists($filename))) {
            $root = match($type) {
                'db' => $this->dbDir,
                'config' => $this->configDir,
                'data' => $this->dataRoot,
            };
            $filename = $root . "/$filename";
            if (!file_exists($filename)) {
                $filename = $this->projectDir . "/$filename";
            }
        }
        return ($filename && file_exists($filename)) ? $filename : null;
    }

    function getStorageBox(string $filename,
                           array $tables=[],
                           bool $destroy=false,
                           bool $createFromConfig=false,
                            ?Config $config = null,
    ): StorageBox
    {
        if ($createFromConfig) {
            if (!$config) {
                assert(false, "Pass in config for now.");
                // filename? Or code???  ugh,
//                $config = $this->getConfig($filename)
            }
            // the array! someday the model.
            $tables = $config->getTables();
//            foreach ($config->getTables() as $tableName => $table) {
//                dd($tableName, $table);
//            }
        }
        $destroy && $this->destroy($filename);
        if (!$kv = $this->storageBoxes[$filename]??false)
        {
            $class = $this->isDebug ? TraceableStorageBox::class : StorageBox::class;
            $kv =  new $class($filename,
                $this->data, // for debug
            $config,
                accessor: $this->accessor,
                logger: $this->logger, stopwatch: $this->stopwatch);
            $this->storageBoxes[$filename] = $kv;
        }
//        dump($filename, storageBoxes: array_keys($this->storageBoxes));
        return $kv;
    }

//    function getStringBox(string $filename, array $tables=[]): StorageBox
//    {
//        return new StorageBox($filename, $tables, valueType: 'string', logger: $this->logger);
//    }

    function destroy(string $filename): void
    {
        $filename = $this->resolveFilename($filename);
        if ($filename && file_exists($filename)) {
            unlink($filename);
        }
    }

    /** @internal used in the DataCollector class */
    public function getData(): array
    {
        return $this->data;
        foreach ($this->storageBoxes as $filename => $storageBox) {
            $this->data[$filename] = $storageBox->getData();
        }
        return $this->data;
    }

    /**
     * @return array<Config>
     */
    public function getConfigFiles(): array
    {
        $finder = new Finder();
        $configs  = [];
        // this is only the configs in the configDir.
        foreach ($finder->files()->name('*.yaml')->in($this->getConfigDir()) as $file) {
            // we can optimize later...
            $code = $file->getFilenameWithoutExtension();
            $config = $this->getConfig($code);

            $resolvedDataPath = $this->resolveFilename($config->getSourceFilesDir(), 'data');
            $config->dataDir = $resolvedDataPath;
//            dd($config);
            // hacky!  configs can belong to more than one filename
            $config->setPixieFilename($this->getPixieFilename($code));
            assert($config->getPixieFilename(), "Missing pixie filename for $code");
            $configs[$code] = $config;
        }
        return $configs;
//        // we could parse these, though then we should cache them.  Since they're in config, we could cache them at compile-time
//        return glob($this->getConfigDir() . '/*.yaml');

    }

    // @todo: add custom dataDir, etc.
    public function getConfig(string $pixieCode): Config
    {
        $configFilename = $this->getConfigFilename($pixieCode);
//        $configData = Yaml::parseFile($configFilename);
//        $config = $this->denormalizer->denormalize($configData, Config::class);
//        dd(config: $config, data: $configData);
//        $config->setConfigFilename($configFilename);
        $config = $this->serializer->deserialize(
            file_get_contents($configFilename),
             Config::class, 'yaml');
        assert($config instanceof Config);
        assert($config->source);
        assert($config->source instanceof Source);
        foreach ($config->getTables() as $idx=>$table) {
            assert($table instanceof Table, "table $idx is not of class Table");
        }
//        dd($config, $configFilename, $config);
        return $config;
    }
    public function getConfigFilename(string $pixieCode): string
    {
        // @todo: handle non-standard locations
        return $this->getConfigDir() . "/$pixieCode.yaml";
    }

    public function getConfigDir(bool $autoCreate=false): string
    {
        $dir = $this->configDir;
        if (!file_exists($dir) && !str_starts_with($dir, "/")) {
            $dir = $this->projectDir . "/$dir";
        }

        if ($autoCreate && !is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
        return $dir;

    }

    public function getDataRoot(): string
    {
        return $this->addProjectDir($this->dataRoot);
    }

    public function getPixieDbDir()
    {
        return $this->addProjectDir($this->dbDir);
    }

    public function addProjectDir(string $s): string
    {
        if (!file_exists($s) && !str_starts_with($s, "/")) {
            $s  = $this->projectDir . "/$s";
        }
        return $s;
    }
    public function removeProjectDir(string $s): string
    {
        return str_replace($this->projectDir . '/', '', $s);
    }


    public function getSourceFilesDir(?string $pixieCode=null, ?Config $config=null,
                                      bool $autoCreate=false, bool $throwErrorIfMissing=true): ?string
    {
        if (!$config) {
            $config = $this->getConfig($pixieCode);
        }

        if (!$dir = $config->getSourceFilesDir()) {
            $dir = $this->dataRoot . "/$pixieCode";
        }

        $dir = $this->addProjectDir($dir);
        if ($autoCreate && !is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
        if ($throwErrorIfMissing) {
            assert(file_exists($dir), "Missing source files dir $dir");
        }
        return file_exists($dir) ? realpath($dir): null;


    }



}
