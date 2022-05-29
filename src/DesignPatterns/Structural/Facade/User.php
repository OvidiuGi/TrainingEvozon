<?php

namespace App\DesignPatterns\Structural\Facade;

class User
{
    public bool $accountCreated = false;

    public function createAccount(): bool
    {
        $this->accountCreated = true;

        return $this->accountCreated;
    }
}