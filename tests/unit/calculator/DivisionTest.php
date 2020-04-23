<?php

class DivisionTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider divisionDataProvider
     * @test
     */
    public function divides_given_operands($operands, $result): void
    {
        $division = new \App\Calculator\Division;
        $division->setOperands($operands);

        $this->assertEquals($result, $division->calculate());
    }

    /**
     * @test
     */
    public function removes_division_by_zero_operands(): void
    {
        $division = new \App\Calculator\Division;
        $division->setOperands([20, 0, 0, 5, 0, 0, 2]);

        $this->assertEquals(2, $division->calculate());
    }

    /**
     * @test
     */
    public function no_operands_given_throws_exception_when_calculating(): void
    {
        $this->expectException(\App\Calculator\Exceptions\NoOperandsException::class);

        $division = new \App\Calculator\Division();
        $division->calculate();
    }

    public function divisionDataProvider(): array
    {
        return [
            [[100, 2], 50],
            [[100, 2, 2], 25],
            [[100, 2, 2, 2], 12.5]
        ];
    }
}
