<?php

namespace App\DesignPatterns\Behavioral\Observer\Example2;

class ShopObserver implements ObserverInterface
{
    private $products = array();

    private string $name;

    private string $city;

    public function __construct(string $name, string $city)
    {
        $this->name = $name;
        $this->city = $city;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getProducts(): void
    {
        echo "\n";
        foreach ($this->products as $key => $value) {
            echo $this->products[$key]->getName(). "\n";
        }
    }

    public function update(AbstractProduct $product): AbstractProduct
    {
        echo "AM PRIMIT MARFA! Location: $this->city";
        $this->products[] = $product;

        return $product->getProduct();
    }
}