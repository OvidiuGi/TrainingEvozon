<?php

namespace App\DesignPatterns\Structural\Composite;

abstract class Product
{
    abstract function getProductInfo(int $index): ?string;

    abstract function getProductCount(): int;

    abstract function setProductCount(int $newCount): void;

    abstract function addProduct(OneProduct $newProduct): int;

    abstract function removeProduct(OneProduct $oldProduct): int;
}