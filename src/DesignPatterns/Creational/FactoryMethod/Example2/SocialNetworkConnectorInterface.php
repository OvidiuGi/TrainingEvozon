<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Example2;

interface SocialNetworkConnectorInterface
{
    public function logIn(): void;

    public function logOut(): void;

    public function createPost($content): void;
}