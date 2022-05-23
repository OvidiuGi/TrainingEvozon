<?php

namespace App\DesignPatterns\Creational\Builder;

interface VehicleBuilderInterface
{
    public function setModel();

    public function setEnginesCount();

    public function setType();

    public function getVehicle();
}