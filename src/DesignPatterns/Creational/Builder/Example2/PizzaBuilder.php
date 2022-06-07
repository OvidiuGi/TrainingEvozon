<?php

namespace App\DesignPatterns\Creational\Builder\Example2;

abstract class PizzaBuilder
{
    protected Pizza $pizza;

    public function getPizza()
    {
        return $this->pizza;
    }

    public function createPizza()
    {
        $this->pizza = new Pizza();
    }

    abstract public function buildDough();

    abstract public function buildSauce();

    abstract public function buildTopping();
}