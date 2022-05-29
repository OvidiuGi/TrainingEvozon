<?php

namespace App\Tests\DesignPatterns\Structural\Facade;

use App\DesignPatterns\Structural\Facade\UserAppointmentFacade;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testFacade(): void
    {
        $facade = new UserAppointmentFacade();

        $this->assertTrue($facade->makeAppointment());
    }
}