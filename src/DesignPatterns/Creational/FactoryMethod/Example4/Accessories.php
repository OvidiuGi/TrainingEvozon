<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Example4;

class Accessories implements ProductInterface
{
    private int $id;

    private string $name;

    private int $price;

    public function showProduct()
    {
        return "This accessory from Warehouse is with id: $this->id, and name: $this->name, and price: $this->price";
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setPrice(int $price)
    {
        $this->price = $price;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getName(): string
    {
        return $this->name;
    }
}