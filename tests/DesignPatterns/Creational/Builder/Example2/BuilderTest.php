<?php

namespace App\Tests\DesignPatterns\Creational\Builder\Example2;

use App\DesignPatterns\Creational\Builder\Example2\HawaiianPizzaBuilder;
use App\DesignPatterns\Creational\Builder\Example2\Waiter;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testBuilder(): void
    {
        $waiter = new Waiter();
        $waiter->setPizzaBuilder(new HawaiianPizzaBuilder());
        $waiter->buildPizza();

        $hawaii = $waiter->getPizza();
        $hawaii->showIngredients();
        $this->assertTrue(true);
    }
}