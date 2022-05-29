<?php

namespace App\Tests\DesignPatterns\Creational\Prototype\UserExample;

use App\DesignPatterns\Creational\Prototype\UserExample\UserPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testUserPrototype(): void
    {
        $user = new UserPrototype('Andrei','Maria',40);
        $copy = clone $user;
        $this->assertEquals('Clone of Andrei', $copy->getFirstName());
        $this->assertEquals('Maria', $copy->getLastName());
        $this->assertEquals(18, $copy->getAge());
    }
}