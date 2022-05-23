<?php

namespace App\DesignPatterns\Creational\Singleton;

class Client
{
    private ?CarRentalSingleton $rentedCar;

    private bool $haveCar = FALSE;

    public function getHaveCar(): bool
    {
        return $this->haveCar;
    }

    public function returnCar(): void
    {
        $this->rentedCar->returnCar($this->rentedCar);
        $this->haveCar = FALSE;
    }

    public function rentCar(): void
    {
        $this->rentedCar = CarRentalSingleton::rentCar();

        if ($this->rentedCar == NULL) {
            $this->haveCar = FALSE;

            return;
        }

        $this->haveCar = TRUE;
    }
}