<?php

namespace App\Tests\DesignPatterns\Behavioral\ChainOfResponsibility\Example2;

use App\DesignPatterns\Behavioral\ChainOfResponsibility\Example2\ConsoleLogger;
use App\DesignPatterns\Behavioral\ChainOfResponsibility\Example2\EmailLogger;
use App\DesignPatterns\Behavioral\ChainOfResponsibility\Example2\FileLogger;
use App\DesignPatterns\Behavioral\ChainOfResponsibility\Example2\Logger;
use PHPUnit\Framework\TestCase;

class ChainTest extends TestCase
{
    public function testChainOfResponsibility(): void
    {
        $logger = new ConsoleLogger(Logger::ALL);
        $logger->setNext(new EmailLogger(Logger::FUNCTIONAL_MESSAGE | Logger::FUNCTIONAL_ERROR))
            ->setNext(new FileLogger(Logger::ERROR | Logger::WARNING));
        $logger->message("Testing ConsoleLogger", Logger::DEBUG)
            ->message("Testing FileLogger", Logger::ERROR)
            ->message("Testing EmailLogger", Logger::FUNCTIONAL_MESSAGE)
            ->message("Testing bad severity code for EmailLogger", Logger::NONE);
        $this->assertTrue(true);
    }
}