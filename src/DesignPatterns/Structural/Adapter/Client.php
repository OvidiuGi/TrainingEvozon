<?php

namespace App\DesignPatterns\Structural\Adapter;

class Client
{
    private string $firstName;

    private string $cnp;

    public function __construct(string $firstName, string $cnp)
    {
        $this->firstName = $firstName;
        $this->cnp = $cnp;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getCnp()
    {
        return $this->cnp;
    }
}