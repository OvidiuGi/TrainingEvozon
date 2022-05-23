<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Example1;

interface CarFactoryInterface
{
    public function createCar(): Car;
}