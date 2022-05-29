<?php

namespace App\DesignPatterns\Creational\AbstractFactory;

class JsonText extends Text
{
    public function __construct(string $text)
    {
        parent::__construct($text);

        return '{' . $text . '}';
    }
}