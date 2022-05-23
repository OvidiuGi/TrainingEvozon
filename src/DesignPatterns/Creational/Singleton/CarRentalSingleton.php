<?php

namespace App\DesignPatterns\Creational\Singleton;

class CarRentalSingleton
{
    private string $plates = 'BT-01-GXO';

    private string $make = 'Opel';

    private static $car = NULL;

    private static $isBorrowed = FALSE;

    private function __construct() {
    }

    public static function rentCar()
    {
        if (TRUE == self::$isBorrowed) {
            return NULL;
        }

        if (NULL == self::$car) {
            self::$car = new CarRentalSingleton();
        }
        self::$isBorrowed = TRUE;

        return self::$car;
    }

    public function returnCar(CarRentalSingleton $carReturned): void
    {
        self::$isBorrowed = FALSE;
    }

    public function getPlates(): string
    {
        return $this->plates;
    }

    public function getMake(): string
    {
        return $this->make;
    }
}