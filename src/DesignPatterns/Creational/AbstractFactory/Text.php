<?php

namespace App\DesignPatterns\Creational\AbstractFactory;

abstract class Text
{
    public string $text = '';

    public function __construct(string $text)
    {
        $this->text = $text;
    }
}