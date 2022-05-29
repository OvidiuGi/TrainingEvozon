<?php

namespace App\DesignPatterns\Behavioral\Strategy;

interface ScoringAlgorithmInterface
{
    public function calculateScore(int $hits, int $seconds);
}