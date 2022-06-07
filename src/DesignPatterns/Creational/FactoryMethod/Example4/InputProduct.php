<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Example4;

class InputProduct implements ProductStrategyInterface
{
    private array $productData;

    public function __construct($productData = [])
    {
        $this->productData = $productData;
    }

    public function createProduct(ProductInterface $product): ProductInterface
    {
        if(!isset($this->productData['id']) && !isset($this->productData['name']) && !isset($this->productData['price'])) {
            throw new \Exception('Invalid data');
        }

        $product->setId($this->productData['id']);
        $product->setName($this->productData['name']);
        $product->setPrice($this->productData['price']);

        return $product;
    }

    public function showDetails(): string
    {
        return "This is a product created with your input";
    }
}