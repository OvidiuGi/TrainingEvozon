<?php

namespace App\DesignPatterns\Structural\Adapter;

class ClientAdapter
{
    private Client $client;

    private int $age;

    public function __construct(Client $client, int $age)
    {
        $this->client = $client;
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}