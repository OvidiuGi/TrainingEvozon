<?php

namespace App\DesignPatterns\Structural\Bridge;

class BridgeCarSaleImp extends BridgeCarImp
{

    public function showMake(string $make)
    {
        return 'SALE!!!  ' . $make;
    }

    public function showModel(string $model)
    {
        return 'SALE!!! ' . $model;
    }
}