<?php

namespace App\DesignPatterns\Structural\Bridge;

class Skype implements MessagingInterface
{
    public function send(string $body): void
    {
        // TODO: Send a message.
    }
}