<?php

namespace App\DesignPatterns\Behavioral\Command\Example2;

class FlipUpCommand implements CommandInterface
{
    private ReceiverInterface $receiver;

    public function __construct(ReceiverInterface $receiver)
    {
        $this->receiver = $receiver;
    }
    public function execute()
    {
        $this->receiver->turnOn();
    }
}