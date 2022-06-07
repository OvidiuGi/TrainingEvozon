<?php

namespace App\DesignPatterns\Structural\Decorator;

class Aerobic implements MembershipInterface
{
    private ?MembershipInterface $option;

    public function __construct(?MembershipInterface $option = null)
    {
        $this->option = $option;
    }
    public function cost(): int
    {
        if (!isset($this->option)) {
            return 20;
        }

        return $this->option->cost() + 20;
    }
}