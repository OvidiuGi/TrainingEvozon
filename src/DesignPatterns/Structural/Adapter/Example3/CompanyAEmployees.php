<?php

namespace App\DesignPatterns\Structural\Adapter\Example3;

class CompanyAEmployees
{
    public function getEmployee(string $sqlQuery): Employee
    {
        return new Employee('SQL','Ovidiu','Gireada');
    }
}