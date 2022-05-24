<?php

namespace App\DesignPatterns\Structural\Bridge;

abstract class Device implements DeviceInterface
{
    protected $sender;

    public function setSender(MessagingInterface $sender)
    {
        $this->sender = $sender;
    }
}