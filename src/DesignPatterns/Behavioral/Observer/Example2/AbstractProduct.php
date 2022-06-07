<?php

namespace App\DesignPatterns\Behavioral\Observer\Example2;

abstract class AbstractProduct
{
    protected string $name;

    protected string $description;

    protected int $price;

    abstract function attach(ObserverInterface $shop);

    abstract function detach(ObserverInterface $shop);

    abstract function notify();

    abstract function getProduct();
}