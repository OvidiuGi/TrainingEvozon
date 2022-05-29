<?php

namespace App\Tests\DesignPatterns\Structural\Decorator;

use App\DesignPatterns\Structural\Decorator\Aerobic;
use App\DesignPatterns\Structural\Decorator\BasicMembership;
use App\DesignPatterns\Structural\Decorator\PersonalTrainer;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testDecoratorPattern(): void
    {
        $basicMembership = new BasicMembership();
        $this->assertEquals(100,$basicMembership->cost());
        $withAerobic = new Aerobic($basicMembership);
        $this->assertEquals(120,$withAerobic->cost());
        $withPersonalTrainerBasic = new PersonalTrainer($basicMembership);
        $this->assertEquals(150,$withPersonalTrainerBasic->cost());
        $withPersonalTrainerAerobic = new PersonalTrainer($withAerobic);
        $this->assertEquals(170,$withPersonalTrainerAerobic->cost());
    }
}