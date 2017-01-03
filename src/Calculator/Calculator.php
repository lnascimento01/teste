<?php

namespace TrocoCalculatorTabajara\Calculator;

class Calculator
{
    private $subtraction;

    /**
     * Calculator constructor.
     * @param $totalReceived
     * @param $totalPrice
     */
    public function __construct($totalReceived, $totalPrice)
    {
        $this->subtraction = $totalReceived - $totalPrice;
    }

    /**
     * @return Transshipment
     */
    public function getTransshipment()
    {
        $transshipment = new Transshipment();

        $note_list = [100, 50, 20, 10, 5];

        $subtraction = $this->subtraction;

        foreach ($note_list as $note_number) {

            $subtraction = $this->handleResult($subtraction, $note_number, $transshipment);
        }

        return $transshipment;
    }

    private function handleResult($result, $note, Transshipment $transshipment)
    {
        $qtd = 0;

        if ($result >= $note) {

            $qtd = intval(floor($result / $note));
        }

        if ($qtd > 0) {

            $transshipment->addNote($note, $qtd);

            $result = $result - ($note * $qtd);
        }

        return $result;
    }
}