<?php

namespace App\DesignPatterns\Behavioral\Command\Example2;

class Engine implements ReceiverInterface
{

    public function turnOn(): void
    {
        echo "Engine is turned on\n";
    }

    public function turnOff(): void
    {
        echo "Engine turned off\n";
    }
}