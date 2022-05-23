<?php

namespace App\DesignPatterns\Structural\Bridge;

abstract class BridgeCarImp
{
    abstract public function showMake(string $make);

    abstract public function showModel(string $model);
}