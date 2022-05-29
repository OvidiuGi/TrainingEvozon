<?php

namespace App\DesignPatterns\Behavioral\Interpreter;

class Sum implements MathExpressionInterface
{
    private MathExpressionInterface $a;
    private MathExpressionInterface $b;

    public function __construct(MathExpressionInterface $a, MathExpressionInterface $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function evaluate(array $values)
    {
        return $this->a->evaluate($values) + $this->b->evaluate($values);
    }
}