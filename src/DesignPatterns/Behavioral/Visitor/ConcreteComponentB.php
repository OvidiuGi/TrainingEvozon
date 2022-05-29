<?php

namespace App\DesignPatterns\Behavioral\Visitor;

class ConcreteComponentB implements ComponentInterface
{
    public function accept(VisitorInterface $visitor): void
    {
        $visitor->visitConcreteComponentB($this);
    }

    public function exclusiveMethodOfConcreteComponentB(): string
    {
        return "B";
    }
}