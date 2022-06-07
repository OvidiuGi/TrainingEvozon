<?php

namespace App\Tests\DesignPatterns\Creational\FactoryMethod\Example3;

use App\DesignPatterns\Creational\FactoryMethod\Example3\Product;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testFactoryMethod(): void
    {
        $productData = [
            'id' => 1,
            'name' => 'jeleuri',
            'price' => 10
        ];
        $productFromArray = Product::createFromArray($productData);
        $this->assertEquals(
            'This product is with id: 1, and name: jeleuri, and price: 10',
            $productFromArray->showProduct()
        );
    }
}