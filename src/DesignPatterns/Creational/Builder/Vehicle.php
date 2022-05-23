<?php

namespace App\DesignPatterns\Creational\Builder;

class Vehicle
{
    public string $model = '';

    public int $enginesCount = 0;

    public string $type = '';

    const CAR = "Car";

    const BUS = "Bus";

    const TRAILER = "Trailer";
}