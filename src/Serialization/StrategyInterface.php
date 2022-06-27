<?php

namespace App\Serialization;

use App\Cache\PersonMarkerInterface;

interface StrategyInterface
{
    public function serialize(PersonMarkerInterface $person, string $format);

    public function deserialize($data, string $format);
}