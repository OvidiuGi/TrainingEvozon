<?php

namespace App\DesignPatterns\Structural\Bridge;

class Phone extends Device
{
    public function send(string $body)
    {
        $body .= "\n\n Sent from phone.";

        return $this->sender->send($body);
    }
}