<?php

namespace App\DesignPatterns\Behavioral\Observer;

class PatternObserver extends AbstractObserver
{
    public function __construct()
    {

    }

    public function update(AbstractSubject $subject)
    {
        echo "IN PATTERN OBSERVER - NEW GOSSIP\n";
        return $subject->getFavorites();
    }
}