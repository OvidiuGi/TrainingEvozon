<?php

namespace App\Tests\DesignPatterns\Structural\Bridge;

use App\DesignPatterns\Structural\Bridge\BridgeCarMakeModel;
use PHPUnit\Framework\TestCase;

class BridgeCarTest extends TestCase
{
    public function testBridgeCar(): void
    {
        $car = new BridgeCarMakeModel('Audi','A6',25000);
        $this->assertEquals('The best car Audi',$car->showMake());

        $carCheap = new BridgeCarMakeModel('Dacia','Logan',10000);
        $this->assertEquals('SALE!!! Logan',$carCheap->showModel());
    }
}