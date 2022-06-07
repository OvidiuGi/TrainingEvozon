<?php

namespace App\DesignPatterns\Behavioral\Observer\Example2;

class Phone extends AbstractProduct
{
    private $shops = array();

    public function __construct(string $name, string $description, string $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
    public function attach(ObserverInterface $shop)
    {
        $this->shops[] = $shop;
    }

    public function detach(ObserverInterface $shop)
    {
        foreach ($this->shops as $key => $value) {
            if ($value == $shop) {
                unset($this->shops[$key]);
            }
        }
    }

    public function notify()
    {
        foreach ($this->shops as $shop) {
            $shop->update($this);
        }
    }

    public function getName()
    {
        return $this->name;
    }

    function getProduct(): self
    {
        echo "
        Name: $this->name, the best phone ever seen!
        Description: $this->description
        Price: $this->price
        ";
        return $this;
    }
}