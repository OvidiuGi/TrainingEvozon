<?php

namespace App\DesignPatterns\Behavioral\Strategy;

class MenScoringAlgorithm implements ScoringAlgorithmInterface
{
    public function calculateScore(int $hits, int $seconds)
    {
        return ($hits * 100) - ($seconds / 5);
    }
}