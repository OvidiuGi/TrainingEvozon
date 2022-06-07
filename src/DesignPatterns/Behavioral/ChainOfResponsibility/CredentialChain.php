<?php

namespace App\DesignPatterns\Behavioral\ChainOfResponsibility;

class CredentialChain extends AbstractChain
{
    private $validCredentials = [
        ['username' => 'hello', 'password' => '123'],
        ['username' => 'user', 'password' => '345'],
    ];

    public function check(User $user): bool
    {
        foreach ($this->validCredentials as $validCredential) {
            if(
                $user->getUsername() === $validCredential['username'] &&
                $user->getPassword() === $validCredential['password']
            ) {
                return parent::check($user);
            }
        }

        return false;
    }
}