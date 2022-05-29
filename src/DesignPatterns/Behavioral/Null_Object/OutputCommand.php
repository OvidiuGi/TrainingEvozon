<?php

namespace App\DesignPatterns\Behavioral\Null_Object;

class OutputCommand implements CommandInterface
{
    public function execute(): string
    {
        return "Output from the command";
    }
}