<?php

namespace App\DesignPatterns\Behavioral\Null_Object;

interface CommandInterface
{
    public function execute(): string;
}