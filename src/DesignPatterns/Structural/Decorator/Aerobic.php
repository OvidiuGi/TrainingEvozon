<?php

namespace App\DesignPatterns\Structural\Decorator;

class Aerobic implements MembershipInterface
{
    private MembershipInterface $option;

    public function __construct(MembershipInterface $option)
    {
        $this->option = $option;
    }
    public function cost(): int
    {
        return $this->option->cost() + 20;
    }
}