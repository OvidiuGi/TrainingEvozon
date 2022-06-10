<?php

namespace App\Serialization;

interface StrategyInterface
{
    public function serialize(Person $person, string $format): string;

    public function deserialize($data, string $format);
}