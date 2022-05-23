<?php

namespace App\Tests\DesignPatterns\Creational\Builder;

use App\DesignPatterns\Creational\Builder\BmwBusBuilder;
use App\DesignPatterns\Creational\Builder\IvecoTrailerBuilder;
use App\DesignPatterns\Creational\Builder\OpelCarBuilder;
use App\DesignPatterns\Creational\Builder\Vehicle;
use App\DesignPatterns\Creational\Builder\VehicleDirector;
use PHPUnit\Framework\TestCase;

class VehicleBuilderTest extends TestCase
{
    public function testOpelCarBuilder(): void
    {
        $opelCar = (new VehicleDirector())->build(new OpelCarBuilder(new Vehicle()));
        $this->assertEquals('Opel',$opelCar->model);
        $this->assertEquals(1,$opelCar->enginesCount);
        $this->assertEquals(Vehicle::CAR,$opelCar->type);
    }

    public function testBmwBusBuilder(): void
    {
        $bmwBus = (new VehicleDirector())->build(new BmwBusBuilder(new Vehicle()));
        $this->assertEquals('BMW',$bmwBus->model);
        $this->assertEquals(2,$bmwBus->enginesCount);
        $this->assertEquals(Vehicle::BUS,$bmwBus->type);
    }

    public function testIvecoTrailerBuilder(): void
    {
        $ivecoTrailer = (new VehicleDirector())->build(new IvecoTrailerBuilder(new Vehicle()));
        $this->assertEquals('Iveco',$ivecoTrailer->model);
        $this->assertEquals(2,$ivecoTrailer->enginesCount);
        $this->assertEquals(Vehicle::TRAILER,$ivecoTrailer->type);
    }
}