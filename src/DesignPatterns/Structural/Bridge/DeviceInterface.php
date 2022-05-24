<?php

namespace App\DesignPatterns\Structural\Bridge;

interface DeviceInterface
{
    public function setSender(MessagingInterface $sender);

    public function send(string $body);
}