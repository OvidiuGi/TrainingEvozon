<?php

namespace App\Tests\DesignPatterns\Behavioral\Command\Example2;

use App\DesignPatterns\Behavioral\Command\Example2\Engine;
use App\DesignPatterns\Behavioral\Command\Example2\FlipDownCommand;
use App\DesignPatterns\Behavioral\Command\Example2\FlipUpCommand;
use App\DesignPatterns\Behavioral\Command\Example2\Light;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testCommand(): void
    {
        $lamp = new Light();
        $flipUp = new FlipUpCommand($lamp);
        $flipDown = new FlipDownCommand($lamp);

        echo "Turning the light on\n";
        $flipUp->execute();
        echo "Turning the light off\n";
        $flipDown->execute();
        echo "\n";

        $engine = new Engine();
        $rotateRight = new FlipUpCommand($engine);
        $rotateLeft = new FlipDownCommand($engine);

        echo "Turning the engine on\n";
        $rotateRight->execute();
        echo "Turning the engine off\n";
        $rotateLeft->execute();

        $this->assertTrue(true);
    }
}