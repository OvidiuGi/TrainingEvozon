<?php

namespace App\DesignPatterns\Creational\Builder;

class VehicleDirector
{
    public function build(VehicleBuilderInterface $builder)
    {
        $builder->setModel();
        $builder->setEnginesCount();
        $builder->setType();

        return $builder->getVehicle();
    }
}