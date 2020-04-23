<?php

namespace App\Calculator;

use App\Calculator\Exceptions\NoOperandsException;

class Division extends OperationAbstract implements OperationInterface
{
    public function calculate(): float
    {
        if (count($this->operands) === 0) {
            throw new NoOperandsException;
        }

        return array_reduce(array_filter($this->operands), static function ($carry, $itemOnArray) {
            if ($carry !== null && $itemOnArray !== null) {
                return $carry / $itemOnArray;
            }

            return $itemOnArray;
        }, null);

//        $result = 0;
//
//        foreach ($this->operands as $index => $operand)
//        {
//            if ($operand === 0) {
//                continue;
//            }
//
//            if ($index === 0) {
//                $result = $operand;
//                continue;
//            }
//
//            $result /= $operand;
//        }
//
//        return $result;
    }
}
