<?php

namespace App\DesignPatterns\Behavioral\Interpreter;

class Variable implements MathExpressionInterface
{
    private string $letter;

    public function __construct(string $letter)
    {
        $this->letter = $letter;
    }

    public function evaluate(array $values)
    {
        return $values[$this->letter];
    }
}