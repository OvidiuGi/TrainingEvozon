<?php

namespace App\DesignPatterns\Structural\Adapter\Example3;

class CompanyBEmployees
{
    public function getEmployee(string $ldap): Employee
    {
        return new Employee('LDAP','Mircea','Bravo');
    }
}