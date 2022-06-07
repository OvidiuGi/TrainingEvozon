<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Example4;

interface ProductStrategyInterface
{
    public function createProduct(ProductInterface $product): ProductInterface;

    public function showDetails(): string;
}