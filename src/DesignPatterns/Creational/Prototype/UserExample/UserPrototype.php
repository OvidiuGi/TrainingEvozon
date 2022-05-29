<?php

namespace App\DesignPatterns\Creational\Prototype\UserExample;

class UserPrototype
{
    private string $firstName;

    private string $lastName;

    private int $age;

    public function __construct(string $firstName, string $lastName, int $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function __clone()
    {
        $this->firstName = 'Clone of ' . $this->firstName;
        $this->age = 18;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}