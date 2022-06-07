<?php

namespace App\DesignPatterns\Structural\Adapter\Example3;

interface EmployeeBrowser
{
    public function getEmployee(string $department, string $firstName, string $lastName): Employee;
}