<?php

namespace DeGraciaMathieu\IsEven\Tests;

use PHPUnit\Framework\TestCase;

class IsEvenTest extends TestCase
{
    /** 
     * @test
     * @dataProvider dataProvider
     */
    public function check(int $number, bool $expected)
    {
        $isEven = \DeGraciaMathieu\IsEven\isEven($number);

        $this->assertEquals($expected, $isEven);
    }

    public function dataProvider(): array
    {
        return [
            [2, true],
            [3, false],
            // [1025, false],
        ];
    }
}
