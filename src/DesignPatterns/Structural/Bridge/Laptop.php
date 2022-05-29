<?php

namespace App\DesignPatterns\Structural\Bridge;

class Laptop extends Device
{
    public function send(string $body)
    {
        $body .= "\n\n Sent from Laptop.";

        return $this->sender->send($body);
    }
}