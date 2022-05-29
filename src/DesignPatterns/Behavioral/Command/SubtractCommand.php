<?php

namespace App\DesignPatterns\Behavioral\Command;

class SubtractCommand implements CalculatorCommandInterface
{
    private Calculator $calculator;

    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function execute()
    {
        return $this->calculator->subtract();
    }
}