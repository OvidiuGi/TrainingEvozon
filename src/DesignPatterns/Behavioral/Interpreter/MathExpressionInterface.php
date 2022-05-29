<?php

namespace App\DesignPatterns\Behavioral\Interpreter;

interface MathExpressionInterface
{
    public function evaluate(array $values);
}