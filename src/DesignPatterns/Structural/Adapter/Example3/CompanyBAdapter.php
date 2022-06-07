<?php

namespace App\DesignPatterns\Structural\Adapter\Example3;

class CompanyBAdapter implements EmployeeBrowser
{
    public function getEmployee(string $department, string $firstName, string $lastName): Employee
    {
        $ldap = "ov1 = " . $department
            . ", cn = " . $firstName . $lastName;

        $companyBEmployees = new CompanyBEmployees();
    return $companyBEmployees->getEmployee($ldap);
    }
}