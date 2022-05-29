<?php

namespace App\Tests\DesignPatterns\Behavioral\Command;

use App\DesignPatterns\Behavioral\Command\AddCommand;
use App\DesignPatterns\Behavioral\Command\Calculator;
use App\DesignPatterns\Behavioral\Command\CommandInvoker;
use App\DesignPatterns\Behavioral\Command\SubtractCommand;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testCommand()
    {
        $calculator = new Calculator(2,4);
        $invoker = new CommandInvoker(new AddCommand($calculator));
        $this->assertEquals(6, $invoker->handle());
        $invoker->setCommand(new SubtractCommand($calculator));
        $this->assertEquals(-2,$invoker->handle());
    }
}