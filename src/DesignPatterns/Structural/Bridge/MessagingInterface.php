<?php

namespace App\DesignPatterns\Structural\Bridge;

interface MessagingInterface
{
    public function send(string $body);
}