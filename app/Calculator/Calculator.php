<?php

namespace App\Calculator;

class Calculator
{
    public $operation = [];

    public function setOperation(Addition $addition): void
    {
        $this->operation[] = $addition;
    }

    public function getOperations(): array
    {
        return $this->operation;
    }
}
