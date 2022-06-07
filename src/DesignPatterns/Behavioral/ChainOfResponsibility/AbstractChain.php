<?php

namespace App\DesignPatterns\Behavioral\ChainOfResponsibility;

abstract class AbstractChain
{
    public ?self $next = null;

    public function linkNext(self $next): self
    {
        $this->next = $next;

        return $next;
    }

    public function check(User $user): bool
    {
        return $this->next ? $this->next->check($user) : true;
    }
}