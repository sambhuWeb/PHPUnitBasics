<?php

class AdditionTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function adds_up_given_operands(): void
    {
        $addition = new \App\Calculator\Addition;
        $addition->setOperands([5, 11]);

        $this->assertEquals(16, $addition->calculate());
    }

    /**
     * @test
     */
    public function no_operands_given_throws_exception_when_calculating(): void
    {
        $this->expectException(\App\Calculator\Exceptions\NoOperandsException::class);

        $addition = new \App\Calculator\Addition;
        $addition->calculate();
    }
}
