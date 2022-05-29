<?php

namespace App\Tests\DesignPatterns\Structural\Bridge;

use App\DesignPatterns\Structural\Bridge\Phone;
use App\DesignPatterns\Structural\Bridge\Skype;
use PHPUnit\Framework\TestCase;

class BridgeDeviceTest extends TestCase
{
    public function testSendMessage(): void
    {
        $phone = new Phone();
        $phone->setSender(new Skype());

        $phone->send("Hello");
        $this->assertTrue(true);
    }
}