<?php

namespace App\Serialization;

class StrategySerializer
{
    public static function createStrategy(string $strategyType): ?StrategyInterface
    {
        $arr = [
            'php' => new PhpSerializer(),
            'symfony' => new SymfonySerializer(),
            'jms' => new JmsSerializer(),
            ];

        if (!in_array($strategyType, array_keys($arr)))
        {
            return null;
        }

        return $arr[$strategyType];
    }
}