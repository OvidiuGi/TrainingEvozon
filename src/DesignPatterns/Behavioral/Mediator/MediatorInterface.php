<?php

namespace App\DesignPatterns\Behavioral\Mediator;

interface MediatorInterface
{
    public function notify($sender, string $event): void;
}