<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Example4;

class Beverages implements ProductInterface
{
    private int $id;

    private string $name;

    private int $price;

    public function showProduct()
    {
        return "Beverage with id: $this->id, name: $this->name, price: $this->price";
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

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}