<?php

namespace App\Tests\DesignPatterns\Behavioral\State;

use App\DesignPatterns\Behavioral\State\ConcreteStateA;
use App\DesignPatterns\Behavioral\State\Context;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testState(): void
    {
        $context = new Context(new ConcreteStateA());
        $context->request1();
        $context->request2();
        $this->assertTrue(true);
    }
}