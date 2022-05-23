<?php

namespace App\DesignPatterns\Creational\AbstractFactory;

class HtmlFactory extends TextFactory
{
    public function createText(string $text): Text
    {
        return new HtmlText($text);
    }
}