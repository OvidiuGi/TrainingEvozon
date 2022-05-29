<?php

namespace App\Tests\DesignPatterns\Behavioral\Visitor;

use App\DesignPatterns\Behavioral\Visitor\ConcreteComponentA;
use App\DesignPatterns\Behavioral\Visitor\ConcreteComponentB;
use App\DesignPatterns\Behavioral\Visitor\ConcreteVisitor1;
use App\DesignPatterns\Behavioral\Visitor\ConcreteVisitor2;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    public function testVisitor(): void
    {
        $components = [
            new ConcreteComponentA(),
            new ConcreteComponentB()
        ];

        $visitor1 = new ConcreteVisitor1();
        foreach ($components as $component) {
            $component->accept($visitor1);
        }

        $visitor2 = new ConcreteVisitor2();
        foreach ($components as $component) {
            $component->accept($visitor2);
        }

        $this->assertTrue(true);
    }
}