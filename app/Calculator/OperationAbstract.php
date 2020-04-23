<?php

namespace App\Calculator;

class OperationAbstract
{
    public $operands = [];

    public function setOperands(array $operands): void
    {
        $this->operands = $operands;
    }
}
