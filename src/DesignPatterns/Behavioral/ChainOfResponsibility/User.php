<?php

namespace App\DesignPatterns\Behavioral\ChainOfResponsibility;

class User
{
    private string $username;

    private string $password;

    private string $role;

    public function __construct(string $username, string $password, string $role)
    {
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}