<?php

namespace App\Serialization;

class PhpSerializer implements StrategyInterface
{
    public function serialize(Person $person, string $format): string
    {
        return serialize($person);
    }

    public function deserialize($data, string $format): Person
    {
        return unserialize($data);
    }
}