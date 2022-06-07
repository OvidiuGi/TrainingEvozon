<?php

namespace App\DesignPatterns\Behavioral\ChainOfResponsibility;

class Authenticate
{
    private AbstractChain $chain;

    public function __construct(AbstractChain $chain)
    {
        $this->chain = $chain;
    }

    public function login(User $user): bool
    {
        return $this->chain->check($user);
    }
}