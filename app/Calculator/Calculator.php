<?php

namespace App\Calculator;

use function foo\func;

class Calculator implements OperationInterface
{
    public $operations = [];

    public function setOperation(OperationInterface $operation): void
    {
        $this->operations[] = $operation;
    }

    public function setOperations(array $operations): void
    {
        $this->operations = array_merge(
            $this->operations,
            array_filter($operations, static function ($operation) {
                return $operation instanceof OperationInterface;
            })
        );
    }

    public function getOperations(): array
    {
        return $this->operations;
    }

    public function calculate()
    {
        if (count($this->operations) > 1) {
           return array_map(static function ($operation) {
               return $operation->calculate();
           }, $this->operations);

            // $result = [];
            //
            // /** @var OperationInterface $operation */
            // foreach ($this->operations as $operation) {
            //    $result[] = $operation->calculate();
            // }
            //
            // return $result;
        }

        return $this->operations[0]->calculate();
    }
}
