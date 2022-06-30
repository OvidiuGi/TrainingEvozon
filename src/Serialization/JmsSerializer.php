<?php

namespace App\Serialization;

use App\Cache\PersonMarkerInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;

class JmsSerializer implements StrategyInterface
{
    private SerializerInterface $serializer;

    public function __construct()
    {
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function serialize(PersonMarkerInterface $person, string $format): string
    {
        return $this->serializer->serialize($person,$format);
    }

    public function deserialize($data, string $format)
    {
        return $this->serializer->deserialize($data, PersonMarkerInterface::class, $format);
    }
}