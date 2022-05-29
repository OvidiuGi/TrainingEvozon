<?php

namespace App\Tests\DesignPatterns\Behavioral\Observer;

use App\DesignPatterns\Behavioral\Observer\PatternObserver;
use App\DesignPatterns\Behavioral\Observer\PatternSubject;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testObserver(): void
    {
        $patternGossiper = new PatternSubject();
        $patternGossiperFan = new PatternObserver();

        $patternGossiper->attach($patternGossiperFan);
        $patternGossiper->updateFavorites('null object');
        $patternGossiper->updateFavorites('factory');
        $patternGossiper->detach($patternGossiperFan);
        $patternGossiper->updateFavorites('abstract factory');
        $this->assertTrue(true);
    }
}