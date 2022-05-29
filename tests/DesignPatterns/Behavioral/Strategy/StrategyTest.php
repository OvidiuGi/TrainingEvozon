<?php

namespace App\Tests\DesignPatterns\Behavioral\Strategy;

use App\DesignPatterns\Behavioral\Strategy\MenScoringAlgorithm;
use App\DesignPatterns\Behavioral\Strategy\Scoreboard;
use App\DesignPatterns\Behavioral\Strategy\WomenScoringAlgorithm;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function testStrategy(): void
    {
        $board = new Scoreboard();

        $board->score = new MenScoringAlgorithm();
        $this->assertEquals(988, $board->showScore(10,60));

        $board->score = new WomenScoringAlgorithm();
        $this->assertEquals(985, $board->showScore(10,60));
    }
}