<?php

namespace App\DesignPatterns\Behavioral\Null_Object;

class FileCommand implements CommandInterface
{
    public function execute(): string
    {
        return "Output from file";
    }
}