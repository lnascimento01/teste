<?php

namespace TrocoCalculatorTabajara\Calculator;

class Transshipment
{
    private $notes;

    /**
     * Transshipment constructor.
     * @param $notes
     */
    public function __construct()
    {
        $this->notes = [];
    }

    public function addNote($note, $qtd)
    {
        $this->notes[$note] = $qtd;

        return $this;
    }

    public function getNote($noteNumber)
    {
        return $this->notes[$noteNumber];
    }
}