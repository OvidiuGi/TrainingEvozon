<?php

namespace App\DesignPatterns\Behavioral\Command;

class AddCommand implements CalculatorCommandInterface
{
    private Calculator $calculator;

    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function execute()
    {
        return $this->calculator->add();
    }
}