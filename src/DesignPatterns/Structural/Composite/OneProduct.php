<?php

namespace App\DesignPatterns\Structural\Composite;

class OneProduct extends Product
{
    private string $name;

    private int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getProductInfo(int $index): ?string
    {
        if (1 != $index) {
            return null;
        }

        return $this->name. " with price ". $this->price;
    }

    public function getProductCount(): int
    {
        return 1;
    }

    public function addProduct($product): int
    {
        return false;
    }

    public function removeProduct($product): int
    {
        return false;
    }


    function setProductCount(int $new_count): void
    {
    }
}