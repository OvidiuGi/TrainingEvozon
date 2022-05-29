<?php

namespace App\DesignPatterns\Behavioral\Visitor;

interface ComponentInterface
{
    public function accept(VisitorInterface $visitor): void;
}