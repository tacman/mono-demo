<?php

namespace Survos\GridGroupBundle\Tests;

use PHPUnit\Framework\TestCase;
use Survos\GridGroupBundle\CsvSchema\Parser;
use Symfony\Component\Yaml\Yaml;

class ParserTest extends TestCase
{
    /**
     * @dataProvider csvSteps
     */
    public function testParser(array $test)
    {
        $header = $test['headers'];
        $schema = Parser::createSchemaFromMap($test['map'] ?? [], $header);

        $parser = new Parser([
            'schema' => $schema
        ]);

        $data = $test['source'] ?? null;
        $expects = $test['expects'] ?? null;

        $actual = $parser->fromString($data);

        $this->assertTrue(true);
        $this->assertSame($expects, $actual);
    }

    public static function csvSteps()
    {
        $data = Yaml::parseFile(__DIR__ . '/parser-test.yaml');
        foreach ($data['tests'] as $key => $test) {
            yield [$key => $test];
        }
    }
}