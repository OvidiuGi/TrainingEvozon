<?php

namespace App\DesignPatterns\Behavioral\ChainOfResponsibility;

class RoleChain extends AbstractChain
{
    public const VALID_ROLES = [
        'STUDENT',
        'TEACHER',
    ];

    public function check(User $user): bool
    {
        if (!in_array($user->getRole(), self::VALID_ROLES))
        {
            return false;
        }

        return parent::check($user);
    }
}