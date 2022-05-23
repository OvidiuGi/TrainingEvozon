<?php

namespace App\DesignPatterns\Creational\Builder;

class OpelCarBuilder implements VehicleBuilderInterface
{
    private Vehicle $vehicle;

    public function __construct(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function setModel(): void
    {
        $this->vehicle->model = 'Opel';
    }

    public function setEnginesCount(): void
    {
        $this->vehicle->enginesCount = 1;
    }

    public function setType(): void
    {
        $this->vehicle->type = Vehicle::CAR;
    }

    public function getVehicle(): Vehicle
    {
        return $this->vehicle;
    }
}