<?php

namespace App\DesignPatterns\Structural\Bridge;

class BridgeCarExclusiveImp extends BridgeCarImp
{

    public function showMake(string $make)
    {
        return 'The best car ' . $make;
    }

    public function showModel(string $model)
    {
        return 'The best model ' . $model;
    }
}