<?php

namespace App\DesignPatterns\Behavioral\Interpreter;

class Literal implements MathExpressionInterface
{
    private int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function evaluate(array $values)
    {
        return $this->value;
    }
}