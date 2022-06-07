<?php

namespace App\DesignPatterns\Creational\Builder\Example2;

class Waiter
{
    protected PizzaBuilder $pizzaBuilder;

    public function setPizzaBuilder(PizzaBuilder $pizzaBuilder)
    {
        $this->pizzaBuilder = $pizzaBuilder;
    }

    public function getPizza()
    {
        return $this->pizzaBuilder->getPizza();
    }

    public function buildPizza()
    {
        $this->pizzaBuilder->createPizza();
        $this->pizzaBuilder->buildDough();
        $this->pizzaBuilder->buildSauce();
        $this->pizzaBuilder->buildTopping();
    }
}