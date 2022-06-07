<?php

namespace App\Tests\DesignPatterns\Creational\FactoryMethod\Example1;

use App\DesignPatterns\Creational\FactoryMethod\Example1\OpelCarFactory;
use PHPUnit\Framework\TestCase;

class OpelCarFactoryTest extends TestCase
{
    public function testCreateOpel(): void
    {
        $opel = new OpelCarFactory();
        $createdCar = $opel->createCar();
        $this->assertEquals("opel",$createdCar->model);
        $this->assertEquals(10000,$createdCar->price);
        $this->assertEquals(2012,$createdCar->year);
    }
}