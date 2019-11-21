<?php

namespace ibrahimtuzlak0295\HttpizeString\Tests;

use PHPUnit\Framework\TestCase;
use ibrahimtuzlak0295\HttpizeString\HttpizeString;

class HttpizeStringTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProvider
     */
    public function testVariousStrings(...$strings)
    {
        foreach ($strings as $index => $value) {
            $key = array_keys($strings[$index])[0];
            $value = array_values($strings[$index])[0];
            $this->assertEquals($value, (new HttpizeString($key)));
        }
    }

    public function dataProvider()
    {
        return [
            [
                ['example.com' => 'http://example.com'], // example.com should become http://example.com
                ['http://example.com' => 'http://example.com'],
                ['https://example.com' => 'https://example.com']
            ]
        ];
    }
}
