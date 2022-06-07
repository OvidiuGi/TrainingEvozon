<?php

namespace App\DesignPatterns\Behavioral\Command\Example2;

class FlipDownCommand implements CommandInterface
{
    private ReceiverInterface $receiver;

    public function __construct(ReceiverInterface $receiver)
    {
        $this->receiver = $receiver;
    }
    public function execute()
    {
        $this->receiver->turnOff();
    }
}