<?php

namespace App\DesignPatterns\Structural\Adapter\Example3;

class CompanyAAdapter implements EmployeeBrowser
{
    public function getEmployee(string $department, string $firstName, string $lastName): Employee
    {
        $sql = "SELECT *"
            . " FROM t_employee as employee"
            . " WHERE employee.company= 'COMPANY A'"
            . " AND employee.department = " . $department
            . " AND employee.firstName = " . $firstName
            . " AND employee.lastName = " . $lastName;
        $companyAEmployees = new CompanyAEmployees();

        return $companyAEmployees->getEmployee($sql);
    }
}