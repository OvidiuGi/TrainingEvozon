<?php

namespace App\DesignPatterns\Behavioral\Strategy;

class Scoreboard
{
    public ScoringAlgorithmInterface $score;

    public function showScore(int $hits, int $seconds): int
    {
        return $this->score->calculateScore($hits, $seconds);
    }
}