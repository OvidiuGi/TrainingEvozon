<?php

namespace App\Tests\DesignPatterns\Structural\Adapter\Example3;

use App\DesignPatterns\Structural\Adapter\Example3\CompanyAAdapter;
use App\DesignPatterns\Structural\Adapter\Example3\CompanyAEmployees;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testAdapter(): void
    {
        $companyA = new CompanyAEmployees();
        $employeeA = $companyA->getEmployee('query');
        $this->assertEquals('Ovidiu', $employeeA->getFirstName());

        $adapterA = new CompanyAAdapter();
        $employeeA2 = $adapterA->getEmployee('Departament','Ovidiu','Gir');
        $this->assertEquals('Ovidiu', $employeeA2->getFirstName());
    }
}