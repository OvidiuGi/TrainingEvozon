<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Example4;

interface ProductInterface
{
    public function showProduct();

    public function setId(int $id);

    public function setName(string $name);

    public function setPrice(int $price);

    public function getName();

    public function getPrice();
}