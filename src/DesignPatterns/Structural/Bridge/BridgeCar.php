<?php

namespace App\DesignPatterns\Structural\Bridge;

abstract class BridgeCar
{
    private string $make;

    private string $model;

    private BridgeCarImp $imp;

    public function __construct(string $make, string $model, int $price)
    {
        $this->make = $make;
        $this->model = $model;
        if ($price > 20000) {
            $this->imp = new BridgeCarExclusiveImp();
        }
        if ($price < 20000) {
            $this->imp = new BridgeCarSaleImp();
        }
    }

    public function showModel()
    {
        return $this->imp->showModel($this->model);
    }

    public function showMake()
    {
        return $this->imp->showMake($this->make);
    }
}