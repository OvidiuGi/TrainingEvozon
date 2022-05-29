<?php

namespace App\DesignPatterns\Creational\Builder;

class IvecoTrailerBuilder implements VehicleBuilderInterface
{
    private Vehicle $vehicle;

    public function __construct(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function setModel(): void
    {
        $this->vehicle->model = 'Iveco';
    }

    public function setEnginesCount(): void
    {
        $this->vehicle->enginesCount = 2;
    }

    public function setType(): void
    {
        $this->vehicle->type = Vehicle::TRAILER;
    }

    public function getVehicle(): Vehicle
    {
        return $this->vehicle;
    }
}