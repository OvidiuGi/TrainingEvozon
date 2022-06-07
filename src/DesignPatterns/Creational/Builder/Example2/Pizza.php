<?php

namespace App\DesignPatterns\Creational\Builder\Example2;

class Pizza
{
    protected $dough;

    protected $sauce;

    protected $topping;

    public function setDough($dough)
    {
        $this->dough = $dough;
    }

    public function setSauce($sauce)
    {
        $this->sauce = $sauce;
    }

    public function setTopping($topping)
    {
        $this->topping = $topping;
    }

    public function showIngredients()
    {
        echo "Dough: $this->dough\n";
        echo "Sauce: $this->sauce\n";
        echo "Topping: $this->topping\n";
    }
}