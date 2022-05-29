<?php

namespace App\DesignPatterns\Behavioral\Visitor;

class ConcreteVisitor2 implements VisitorInterface
{
    public function visitConcreteComponentA(ConcreteComponentA $element): void
    {
        echo $element->exclusiveMethodOfConcreteComponentA() . " + ConcreteVisitor2\n";
    }

    public function visitConcreteComponentB(ConcreteComponentB $element): void
    {
        echo $element->exclusiveMethodOfConcreteComponentB() . " + ConcreteVisitor2\n";
    }
}