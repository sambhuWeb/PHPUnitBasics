<?php

namespace App\Calculator;

use App\Calculator\Exceptions\NoOperandsException;

class Addition
{
    public $operands = [];

    public function setOperands(array $operands): void
    {
        $this->operands = $operands;
    }

    public function calculate(): int
    {
        if (count($this->operands) === 0) {
            throw new NoOperandsException;
        }

        return array_sum($this->operands);
    }
}
