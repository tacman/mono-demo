<?php

namespace Survos\GridGroupBundle\CsvSchema;

use Illuminate\Support\Collection;
use League\Csv\Reader;
use Survos\GridGroupBundle\CsvSchema\Exceptions\CastException;
use Survos\GridGroupBundle\CsvSchema\Exceptions\UnsupportedTypeException;
/**
 * CSV Parser class. This is where the magic happens.
 *
 * @author K.Sassnowski <ksassnowski@gmail.com>
 *
 * from https://github.com/shakahl/csv-schema
 */
class Parser
{
    /**
     * @var array
     */
    private $config;

    /**
     * @var string
     */
    private $defaultDelimiter = ',';

    /**
     * @var string
     */
    private $defaultEnclosure = '"';

    /**
     * @var string
     */
    private $defaultEscape = '\\';

    /**
     * @var string
     */
    private $defaultEncoding = 'UTF-8';
    /**
     * @var bool
     */
    private $skipTitle = false;

    /**
     * @var array
     */
    private static $customTypes = [];

    /**
     * Parser constructor.
     *
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Register a handler for a custom type. The handler will be called with
     * the value to parse.
     *
     * @param string   $type
     * @param callable $callback
     */
    public static function registerType($type, callable $callback)
    {
        static::$customTypes[$type] = $callback;
    }

    /**
     * @param $input
     *
     * @return array
     */
    public function fromString($input)
    {
        return $this->parse(Reader::createFromString($input));
    }

    /**
     * @param string $filename
     *
     * @return array
     */
    public function fromFile($filename)
    {
        return $this->parse(Reader::createFromPath($filename));
    }

    /**
     * @param array $columns
     *
     * @return array
     */
    public function parseRow(array $columns)
    {
        $zipper = collect($columns)->zip($this->config['schema']);
        dump($columns, $this->config['schema'], $zipper);
        $flat = $zipper->flatMap(function ($pair, $index) {
            list($value, $type) = $pair;
            dump($value, $type, $pair);

            $parsed = $this->getValue($type, $value);

            $key = array_keys($this->config['schema'])[$index];

            return [$key => $parsed];
        });
        $all = $flat->all();
        dd($all);
        return $all;
    }

    /**
     * @param Reader $reader
     *
     * @return array
     */
    protected function parse(Reader $reader)
    {
        $reader->setDelimiter($this->getConfigValue('delimiter', $this->defaultDelimiter));
        $reader->setEnclosure($this->getConfigValue('enclosure', $this->defaultEnclosure));
        $reader->setEscape($this->getConfigValue('escape', $this->defaultEscape));
        // All conversion methods are removed in favor of conversion classes, use League\Csv\CharsetConverter
//        $reader->setInputEncoding($this->getConfigValue('encoding', $this->defaultEncoding));

        $rows =  new Collection($reader);
        foreach ($rows as $row) {
//            dd($this->config['schema']);
            $parsedRow = $this->parseRow($row);
            dd($row, $parsedRow);
        }

        if ($this->getConfigValue('skipTitle', $this->skipTitle)) {
            $rows->shift();
        }

        $rowCollection = $rows->map(function ($row) {
            return (object) $this->parseRow($row);
        });
        $all = $rowCollection->all();
        dd($all);
        return $all;
//        yield $rows;
    }

    /**
     * @param string $key
     * @param string $default
     *
     * @return mixed
     */
    protected function getConfigValue($key, $default)
    {
        return isset($this->config[$key]) ? $this->config[$key] : $default;
    }

    /**
     * @param string $type
     * @param string $value
     *
     * @return mixed
     *
     * @throws UnsupportedTypeException
     */
    protected function getValue($type, $value)
    {
        list($type, $parameters) = $this->parseType($type);
        $methodName = $this->getMethodName($type);
        if ($methodName == 'parseInt') {
            dd($methodName, $type, $parameters, $value, $parameters);
        }
        if (method_exists($this, $methodName)) {
            $method = [$this, $this->getMethodName($type)];
        } elseif ($this->hasCustomType($type)) {
            $method = static::$customTypes[$type];
        } else {
            throw new UnsupportedTypeException($type);
        }

        return call_user_func_array($method, [$value, $parameters]);
    }

    /**
     * @param string $type
     *
     * @return array
     */
    protected function parseType($type)
    {
        $parameters = [];

        if (strpos($type, ':') !== false) {
            list($type, $parameters) = explode(':', $type, 2);
        }

        return [$type, $parameters];
    }

    /**
     * @param string $type
     *
     * @return string
     */
    protected function getMethodName($type)
    {
        return 'parse'.ucfirst($type);
    }

    /**
     * @param string $value
     *
     * @return string
     */
    protected function parseString($value)
    {
        return (string) $value;
    }

    /**
     * @param string $value
     *
     * @return int
     *
     * @throws CastException
     */
    protected function parseInt($value)
    {
        $this->guardAgainstNonNumeric($value, 'int');

        return (int) $value;
    }

    /**
     * @param string $value
     *
     * @return float
     *
     * @throws CastException
     */
    protected function parseFloat($value)
    {
        $this->guardAgainstNonNumeric($value, 'float');

        return (float) $value;
    }

    /**
     * @param string $string
     * @param string $delimiter
     *
     * @return array
     */
    protected function parseArray($string, $delimiter)
    {
        return explode($delimiter, trim($string));
    }

    /**
     * @param string $value
     * @param string $targetType
     *
     * @throws CastException
     */
    protected function guardAgainstNonNumeric($value, $targetType)
    {
        if (!is_numeric($value) && $value != '') {
            assert(false, "Unable to cast value '$value' to type $targetType.");
            throw new CastException("Unable to cast value '$value' to type $targetType.");
        }
    }

    /**
     * @param string $type
     *
     * @return bool
     */
    protected function hasCustomType($type)
    {
        return isset(static::$customTypes[$type]);
    }
}
