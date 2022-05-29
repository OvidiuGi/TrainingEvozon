<?php

namespace App\Tests\DesignPatterns\Behavioral\Null_Object;

use App\DesignPatterns\Behavioral\Null_Object\Application;
use App\DesignPatterns\Behavioral\Null_Object\FileCommand;
use App\DesignPatterns\Behavioral\Null_Object\OutputCommand;
use PHPUnit\Framework\TestCase;

class NullObjectTest extends TestCase
{
    public function testNullObject(): void
    {
        $outputCommand = new OutputCommand();
        $fileCommand = new FileCommand();
        $app = new Application();
        $this->assertEquals('Output from the command', $app->run($outputCommand));
        $this->assertEquals('Output from file', $app->run($fileCommand));
        $this->assertEquals('Nothing', $app->run());
    }
}