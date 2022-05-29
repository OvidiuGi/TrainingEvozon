<?php

namespace App\DesignPatterns\Structural\Composite;

class SeveralProducts extends Product
{
    private array $products;

    private int $productCount;

    public function __construct()
    {
        $this->productCount = 0;
        $this->products = array();
    }
    function getProductInfo(int $index): string
    {
        if ($index > $this->productCount) {
            return "Product does not exist";
        }

        return $this->products[$index]->getProductInfo(1);
    }

    function getProductCount(): int
    {
        return $this->productCount;
    }

    function setProductCount(int $newCount): void
    {
        $this->productCount = $newCount;
    }

    function addProduct(OneProduct $newProduct): int
    {
        $this->setProductCount($this->getProductCount()+1);
        $this->products[$this->getProductCount()] = $newProduct;

        return $this->getProductCount();
    }

    function removeProduct(OneProduct $oldProduct): int
    {
        $counter = 0;
        while (++$counter <= $this->getProductCount()) {
            if($oldProduct->getProductInfo(1) == $this->products[$counter]->getProductInfo(1)) {
                for ($x = $counter; $x < $this->getProductCount(); $x++) {
                    $this->products[$x] = $this->products[$x+1];
                }
                $this->setProductCount($this->getProductCount()-1);
            }
        }

        return $this->getProductCount();
    }
}