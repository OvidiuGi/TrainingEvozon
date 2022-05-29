<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Example2;

class FacebookPoster extends SocialNetworkPoster
{
    private string $login;

    private string $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnectorInterface
    {
        return new FacebookConnectorInterface($this->login, $this->password);
    }
}