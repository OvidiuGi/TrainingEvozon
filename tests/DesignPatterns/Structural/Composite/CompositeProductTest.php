<?php

namespace App\Tests\DesignPatterns\Structural\Composite;

use App\DesignPatterns\Structural\Composite\OneProduct;
use App\DesignPatterns\Structural\Composite\SeveralProducts;
use PHPUnit\Framework\TestCase;

class CompositeProductTest extends TestCase
{
    public function testCompositePattern(): void
    {
        $firstProduct = new OneProduct('Aparat Cafea',1000);
        $this->assertEquals('Aparat Cafea with price 1000', $firstProduct->getProductInfo(1));

        $secondProduct = new OneProduct('Monitor', 850);
        $thirdProduct = new OneProduct('Laptop',3200);

        $products = new SeveralProducts();

        $productsCount = $products->addProduct($firstProduct);
        $this->assertEquals(1,$products->getProductCount());

        $productsCount = $products->addProduct($secondProduct);
        $this->assertEquals(2,$products->getProductCount());

        $productsCount = $products->addProduct($thirdProduct);
        $this->assertEquals(3,$products->getProductCount());

        $productsCount = $products->removeProduct($firstProduct);
        $this->assertEquals('Monitor with price 850', $products->getProductInfo(1));
    }
}