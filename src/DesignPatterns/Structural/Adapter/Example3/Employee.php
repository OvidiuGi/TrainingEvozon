<?php

namespace App\DesignPatterns\Structural\Adapter\Example3;

class Employee
{
    private string $department;

    private string $firstName;

    private string $lastName;

    public function __construct(string $department, string $firstName, string $lastName)
    {
        $this->department = $department;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }
}