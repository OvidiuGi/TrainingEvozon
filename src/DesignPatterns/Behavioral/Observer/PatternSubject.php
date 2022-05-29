<?php

namespace App\DesignPatterns\Behavioral\Observer;

class PatternSubject extends AbstractSubject
{
    private ?string $favoritePatterns = NULL;

    private $observers = array();

    public function attach(AbstractObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(AbstractObserver $observer)
    {
        foreach ($this->observers as $key => $value) {
            if ($value == $observer) {
                unset($this->observers[$key]);
            }
        }
    }

    public function notify()
    {
        foreach ($this->observers as $obs) {
            $obs->update($this);
        }
    }

    public function updateFavorites($newFavorites)
    {
        $this->favoritePatterns = $newFavorites;
        $this->notify();
    }

    public function getFavorites()
    {
        return $this->favoritePatterns;
    }
}