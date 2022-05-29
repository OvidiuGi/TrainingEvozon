<?php

namespace App\DesignPatterns\Behavioral\Null_Object;

class NullCommand implements CommandInterface
{
    public function execute(): string
    {
        return "Nothing";
    }
}