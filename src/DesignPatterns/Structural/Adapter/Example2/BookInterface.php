<?php

namespace App\DesignPatterns\Structural\Adapter\Example2;

interface BookInterface
{
    public function turnPage(): void;

    public function open(): void;

    public function getPage(): int;
}