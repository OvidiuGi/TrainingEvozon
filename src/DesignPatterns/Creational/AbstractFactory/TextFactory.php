<?php

namespace App\DesignPatterns\Creational\AbstractFactory;

abstract class TextFactory
{
    abstract public function createText(string $text): Text;
}