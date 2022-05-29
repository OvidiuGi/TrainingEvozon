<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Example2;

abstract class SocialNetworkPoster
{
    abstract public function getSocialNetwork(): SocialNetworkConnectorInterface;

    public function post($content): void
    {
        $network = $this->getSocialNetwork();

        $network->logIn();
        $network->createPost($content);
        $network->logout();
    }
}