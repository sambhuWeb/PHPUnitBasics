<?php

class SimpleTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function it_checks_true_asserts_to_true(): void
    {
        $this->assertTrue(true);
    }
}
