<?php

namespace App\DesignPatterns\Structural\Adapter\Example2;

interface EBookInterface
{
    public function unlock(): void;

    public function pressNext(): void;

    public function getPage(): array;
}