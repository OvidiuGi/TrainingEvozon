<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Example1;

class OpelCarFactory implements CarFactoryInterface
{
    public function createCar(): Car
    {
        $car = new Car();
        $car->model = "opel";
        $car->price = 10000;
        $car->year = 2012;

        return $car;
    }
}