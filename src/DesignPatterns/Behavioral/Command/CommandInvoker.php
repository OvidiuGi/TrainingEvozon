<?php

namespace App\DesignPatterns\Behavioral\Command;

class CommandInvoker
{
    private CalculatorCommandInterface $command;

    public function __construct(CalculatorCommandInterface $command)
    {
        $this->command = $command;
    }

    public function setCommand(CalculatorCommandInterface $command)
    {
        $this->command = $command;
    }

    public function handle()
    {
        return $this->command->execute();
    }
}