<?php

namespace App\DesignPatterns\Behavioral\Visitor;

class ConcreteVisitor1 implements VisitorInterface
{
    public function visitConcreteComponentA(ConcreteComponentA $element): void
    {
        echo $element->exclusiveMethodOfConcreteComponentA() . " + ConcreteVisitor1\n";
    }

    public function visitConcreteComponentB(ConcreteComponentB $element): void
    {
        echo $element->exclusiveMethodOfConcreteComponentB() . " + ConcreteVisitor1\n";
    }
}