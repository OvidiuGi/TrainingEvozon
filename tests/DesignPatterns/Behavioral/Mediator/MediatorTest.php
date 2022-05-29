<?php

namespace App\Tests\DesignPatterns\Behavioral\Mediator;

use App\DesignPatterns\Behavioral\Mediator\Component1;
use App\DesignPatterns\Behavioral\Mediator\Component2;
use App\DesignPatterns\Behavioral\Mediator\ConcreteMediator;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testMediator()
    {
        $c1 = new Component1();
        $c2 = new Component2();
        $mediator = new ConcreteMediator($c1,$c2);
        $c1->doA();
        $c2->doD();
        $this->assertTrue(true);
    }
}