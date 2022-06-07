<?php

namespace App\DesignPatterns\Behavioral\Observer\Example2;

interface ObserverInterface
{
    public function update(AbstractProduct $product): AbstractProduct;
}