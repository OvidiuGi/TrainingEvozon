<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Example3;
/*
 * Static Factory Method
 */
class Product
{
    private int $id;

    private string $name;

    private int $price;

    private function __construct(int $id, string $name, int $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public static function createFromArray(array $productData): self
    {
        if(!isset($productData['id']) && !isset($productData['name']) && !isset($productData['price'])) {
            throw new \Exception('Invalid data');
        }

        return new self((int)$productData['id'], $productData['name'], (int)$productData['price']);
    }

    public function showProduct(): string
    {
        return "This product is with id: $this->id, and name: $this->name, and price: $this->price";
    }
}