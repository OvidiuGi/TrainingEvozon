<?php

namespace App\DesignPatterns\Behavioral\Command\Example2;

class Switcher
{
    public function execute(CommandInterface $command)
    {
        $command->execute();
    }
}