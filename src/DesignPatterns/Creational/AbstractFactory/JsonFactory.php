<?php

namespace App\DesignPatterns\Creational\AbstractFactory;

class JsonFactory extends TextFactory
{
    public function createText(string $text): Text
    {
        return new JsonText($text);
    }
}