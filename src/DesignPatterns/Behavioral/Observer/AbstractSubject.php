<?php

namespace App\DesignPatterns\Behavioral\Observer;

abstract class AbstractSubject
{
    abstract function attach(AbstractObserver $observer);

    abstract function detach(AbstractObserver $observer);

    abstract function notify();
}