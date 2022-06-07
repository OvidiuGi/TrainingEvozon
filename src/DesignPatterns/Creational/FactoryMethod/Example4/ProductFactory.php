<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Example4;

class ProductFactory
{
    public function create(ProductStrategyInterface $productStrategy, ProductInterface $product): ProductInterface
    {
//        $productData = $this->getHttpClientData();
//
//        if(!isset($productData['id']) && !isset($productData['name']) && !isset($productData['price'])) {
//            throw new \Exception('The data is invalid');
//        }
//
//        $product->setId($productData['id']);
//        $product->setName($productData['name']);
//        $product->setPrice($productData['price']);
//
//        return $product;
        return $productStrategy->createProduct($product);
    }
}