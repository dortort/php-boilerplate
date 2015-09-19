<?php

namespace Acme\Tests;

use Acme\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    private $calculator;

    protected function setUp()
    {
        $this->calculator = new Calculator();
    }

    /**
     * @dataProvider validSumsProvider
     */
    public function testSum($left, $right, $result)
    {
        $this->assertEquals($result, $this->calculator->sum($left, $right));
    }

    /**
     * @dataProvider validSubsProvider
     */
    public function testSub($left, $right, $result)
    {
        $this->assertEquals($result, $this->calculator->sub($left, $right));
    }

    public function validSumsProvider()
    {
        return [
            [1, 1, 2],
            [1, 2, 3],
            [2, 3, 5],
            [3, 5, 8],
            [5, 8, 13],
        ];
    }

    public function validSubsProvider()
    {
        return [
            [1, 1, 0],
            [2, 1, 1],
            [3, 2, 1],
            [5, 3, 2],
            [8, 5, 3],
        ];
    }

    protected function tearDown()
    {
        $this->calculator = null;
    }
}
