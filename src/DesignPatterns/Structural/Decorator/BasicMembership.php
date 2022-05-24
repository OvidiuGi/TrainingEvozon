<?php

namespace App\DesignPatterns\Structural\Decorator;

class BasicMembership implements MembershipInterface
{
    public function cost(): int
    {
        return 100;
    }
}