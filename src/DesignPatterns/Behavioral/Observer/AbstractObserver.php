<?php

namespace App\DesignPatterns\Behavioral\Observer;

abstract class AbstractObserver
{
    abstract function update(AbstractSubject $subject);
}