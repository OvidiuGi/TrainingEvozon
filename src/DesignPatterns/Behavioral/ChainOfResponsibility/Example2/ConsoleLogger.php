<?php

namespace App\DesignPatterns\Behavioral\ChainOfResponsibility\Example2;

class ConsoleLogger extends Logger
{
    protected function writeMessage(string $msg): void
    {
        echo "Writing to console: $msg\n";
    }
}