<?php

namespace App\DesignPatterns\Creational\AbstractFactory;

class HtmlText extends Text
{
    public function __construct(string $text)
    {
        parent::__construct($text);

        return "<html><head></head><body>{$text}</body></html>";
    }
}