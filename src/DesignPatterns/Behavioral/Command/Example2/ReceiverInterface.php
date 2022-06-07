<?php

namespace App\DesignPatterns\Behavioral\Command\Example2;

interface ReceiverInterface
{
    public function turnOn(): void;

    public function turnOff(): void;
}