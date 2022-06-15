<?php

namespace App\Serialization;

interface StrategyInterface
{
    public function serialize(Person $person, string $format);

    public function deserialize($data, string $format);
}