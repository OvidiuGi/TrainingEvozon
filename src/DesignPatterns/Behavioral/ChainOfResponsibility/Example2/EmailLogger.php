<?php

namespace App\DesignPatterns\Behavioral\ChainOfResponsibility\Example2;

class EmailLogger extends Logger
{
    protected function writeMessage(string $msg): void
    {
        echo "Sending via email: $msg\n";
    }
}