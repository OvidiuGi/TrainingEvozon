<?php

namespace App\DesignPatterns\Behavioral\Strategy;

class WomenScoringAlgorithm implements ScoringAlgorithmInterface
{
    public function calculateScore(int $hits, int $seconds)
    {
        return ($hits * 100) - ($seconds / 4);
    }
}