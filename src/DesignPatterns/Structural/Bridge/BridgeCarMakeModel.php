<?php

namespace App\DesignPatterns\Structural\Bridge;

class BridgeCarMakeModel extends BridgeCar
{
    public function showMakeModel()
    {
        return $this->showMake() . '--' . $this->showModel();
    }
}