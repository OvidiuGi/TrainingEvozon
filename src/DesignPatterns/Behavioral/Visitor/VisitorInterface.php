<?php

namespace App\DesignPatterns\Behavioral\Visitor;

interface VisitorInterface
{
    public function visitConcreteComponentA(ConcreteComponentA $element): void;

    public function visitConcreteComponentB(ConcreteComponentB $element): void;
}