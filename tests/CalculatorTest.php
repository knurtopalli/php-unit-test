<?php

use PHPUnit\Framework\TestCase;

require_once "src/Calculator.php";

class CalculatorTest extends TestCase
{
    protected $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdd()
    {
        $result = $this->calculator->add(5, 10);
        $this->assertEquals(50, $result);
    }
}
