<?php

namespace App\DesignPatterns\Behavioral\State;

class ConcreteStateB extends State
{
    public function handle1(): void
    {
        echo "ConcreteStateB handles request1.\n";
    }

    public function handle2(): void
    {
        echo "ConcreteStateB handles request2.\n";
        $this->context->transitionTo(new ConcreteStateA());
    }
}