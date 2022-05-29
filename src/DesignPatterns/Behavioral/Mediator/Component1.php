<?php

namespace App\DesignPatterns\Behavioral\Mediator;

class Component1 extends BaseComponent
{
    public function doB(): void
    {
        $this->mediator->notify($this,"B");
    }

    public function doA(): void
    {
        $this->mediator->notify($this,"A");
    }
}