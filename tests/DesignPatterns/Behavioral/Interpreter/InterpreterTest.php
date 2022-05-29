<?php

namespace App\Tests\DesignPatterns\Behavioral\Interpreter;

use App\DesignPatterns\Behavioral\Interpreter\Literal;
use App\DesignPatterns\Behavioral\Interpreter\Product;
use App\DesignPatterns\Behavioral\Interpreter\Sum;
use App\DesignPatterns\Behavioral\Interpreter\Variable;
use PHPUnit\Framework\TestCase;

class InterpreterTest extends TestCase
{
    public function testInterpreter()
    {
        $expression = new Product(
            new Literal(10),
            new Sum(new Variable('a'), new Literal(3))
        );
        $this->assertEquals(70,$expression->evaluate(['a' => 4]));
    }
}