<?php

namespace App\DesignPatterns\Structural\Decorator;

class Bundle implements MembershipInterface
{
    private array $options;

    public function __construct()
    {
        $this->options = [];
    }

    public function cost(): int
    {
        return array_reduce($this->options, function (int $currentCost, MembershipInterface $element) {return $element->cost() + $currentCost;},0);
    }

    public function addOption(MembershipInterface $membership)
    {
        $this->options[] = $membership;
    }
}