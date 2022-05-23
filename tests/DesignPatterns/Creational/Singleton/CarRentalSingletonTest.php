<?php

namespace App\Tests\DesignPatterns\Creational\Singleton;

use App\DesignPatterns\Creational\Singleton\Client;
use PHPUnit\Framework\TestCase;

class CarRentalSingletonTest extends TestCase
{
    public function testRentCar()
    {
        $client1 = new Client();
        $client2 = new Client();

        $client1->rentCar();
        $this->assertTrue($client1->getHaveCar());
        $client2->rentCar();
        $this->assertFalse($client2->getHaveCar());
        $client1->returnCar();
        $client2->rentCar();
        $this->assertTrue($client2->getHaveCar());
        $this->assertFalse($client1->getHaveCar());
    }
}