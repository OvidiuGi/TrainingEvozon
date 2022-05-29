<?php

namespace App\Tests\DesignPatterns\Behavioral\Template;

use App\DesignPatterns\Behavioral\Template\ConcreteClass1;
use App\DesignPatterns\Behavioral\Template\ConcreteClass2;
use PHPUnit\Framework\TestCase;

class TemplateTest extends TestCase
{
    public function testTemplate(): void
    {
        $class1 = new ConcreteClass1();
        $class1->templateMethod();

        $class2 = new ConcreteClass2();
        $class2->templateMethod();
        $this->assertTrue(true);
    }
}