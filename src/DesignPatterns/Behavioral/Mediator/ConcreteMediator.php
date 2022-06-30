<?php

namespace App\DesignPatterns\Behavioral\Mediator;

class ConcreteMediator implements MediatorInterface
{
//    private Component1 $component1;
//
//    private Component2 $component2;
//
//    public function __construct(Component1 $c1, Component2 $c2)
//    {
//        $this->component1 = $c1;
//        $this->component1->setMediator($this);
//        $this->component2 = $c2;
//        $this->component2->setMediator($this);
//    }
    public function notify($sender, string $event): void
    {
        if ($event == "A") {
            echo "Mediator reacts on A and triggers c2->C\n";
            $this->component2->doC();
        }

        if ($event == "D") {
            echo "Mediator reacts on D and triggers c1->B, c2->C\n";
            $this->component1->doB();
            $this->component2->doC();
        }
    }
}