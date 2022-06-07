<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Example4;

class HttpClientProduct implements ProductStrategyInterface
{
    private string $httpClient;

    public function __construct(string $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getHttpClientData(): array
    {
        if ($this->httpClient == '') {
            throw new \Exception('HttpClient empty');
        }

        //cumva iau datele din client
        return [
            'id' => 1,
            'name' => 'CocaCola',
            'price' => 5
        ];
    }

    /**
     * @throws \Exception
     */
    public function createProduct(ProductInterface $product): ProductInterface
    {
        $productData = $this->getHttpClientData();

        if(!isset($productData['id']) && !isset($productData['name']) && !isset($productData['price'])) {
            throw new \Exception('The data is invalid');
        }

        $product->setId($productData['id']);
        $product->setName($productData['name']);
        $product->setPrice($productData['price']);

        return $product;
    }

    public function showDetails(): string
    {
        return "This is a product created from HttpClient";
    }
}