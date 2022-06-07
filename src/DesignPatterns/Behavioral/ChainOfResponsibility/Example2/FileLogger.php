<?php

namespace App\DesignPatterns\Behavioral\ChainOfResponsibility\Example2;

class FileLogger extends Logger
{
    protected function writeMessage(string $msg): void
    {
        echo "Writing to a log file: $msg\n";
    }
}