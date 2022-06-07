<?php

namespace App\Tests\DesignPatterns\Creational\FactoryMethod\Example4;

use App\DesignPatterns\Creational\FactoryMethod\Example4\Accessories;
use App\DesignPatterns\Creational\FactoryMethod\Example4\Beverages;
use App\DesignPatterns\Creational\FactoryMethod\Example4\HttpClientProduct;
use App\DesignPatterns\Creational\FactoryMethod\Example4\InputProduct;
use App\DesignPatterns\Creational\FactoryMethod\Example4\ProductFactory;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testFactory(): void
    {
//        $factory = new ProductFactory('www.website.com');
//        $productData = $factory->getHttpClientData();
//        $httpProduct = $factory->createProduct(new Accessories());
//        $this->assertEquals('CocaCola', $httpProduct->getName());
//
//        $beverageData = $factory->getHttpClientData();
//        $httpBeverage = $factory->createProduct(new Beverages());
//        $this->assertEquals('CocaCola',$httpBeverage->getName());

        $factory = new ProductFactory();

        $beverage = $factory->create(new HttpClientProduct('www.mysite.com'), new Beverages());
        $this->assertEquals('CocaCola', $beverage->getName());

        $productData = [
            'id' => 1,
            'name' => 'Ochelari Ray Ban',
            'price' => 800
        ];

        $accessory = $factory->create(new InputProduct($productData), new Accessories());
        $this->assertEquals(800, $accessory->getPrice());
    }
}