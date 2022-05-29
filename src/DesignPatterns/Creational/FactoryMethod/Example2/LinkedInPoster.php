<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Example2;

class LinkedInPoster extends SocialNetworkPoster
{
    private string $email;

    private string $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnectorInterface
    {
        return new LinkedInConnectorInterface($this->email, $this->password);
    }
}