<?php

use TrocoCalculatorTabajara\Calculator\Calculator;

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    public function testBasic()
    {
        $totalReceived = 100;
        $totalPrice = 30;

        $calculator = new Calculator($totalReceived, $totalPrice);

        $transshipment = $calculator->getTransshipment();

        $this->assertEquals(1, $transshipment->getNote(20));
        $this->assertEquals(1, $transshipment->getNote(50));
    }

    public function testBasic2()
    {
        $totalReceived = 500;
        $totalPrice = 250;

        $calculator = new Calculator($totalReceived, $totalPrice);

        $transshipment = $calculator->getTransshipment();

        $this->assertEquals(1, $transshipment->getNote(50));
        $this->assertEquals(2, $transshipment->getNote(100));
    }

    public function testBasic3()
    {
        $totalReceived = 30;
        $totalPrice = 15;

        $calculator = new Calculator($totalReceived, $totalPrice);

        $transshipment = $calculator->getTransshipment();

        $this->assertEquals(1, $transshipment->getNote(5));
        $this->assertEquals(1, $transshipment->getNote(10));
    }

    public function testBasic4()
    {
        $totalReceived = 55;
        $totalPrice = 15;

        $calculator = new Calculator($totalReceived, $totalPrice);

        $transshipment = $calculator->getTransshipment();

        $this->assertEquals(2, $transshipment->getNote(20));
    }
}