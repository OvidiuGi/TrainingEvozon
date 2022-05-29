<?php

namespace App\DesignPatterns\Behavioral\Null_Object;

class Application
{
    public function run(CommandInterface $command = null): string
    {
        $executableCommand = $command ?? new NullCommand();

        return $executableCommand->execute();
    }
}