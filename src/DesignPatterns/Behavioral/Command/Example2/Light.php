<?php

namespace App\DesignPatterns\Behavioral\Command\Example2;

class Light implements ReceiverInterface
{
    public function turnOn(): void
    {
        echo "The light is on\n";
    }

    public function turnOff(): void
    {
        echo "The light is off\n";
    }
}