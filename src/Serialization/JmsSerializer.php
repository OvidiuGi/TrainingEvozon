<?php

namespace App\Serialization;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;

class JmsSerializer implements StrategyInterface
{
    private SerializerInterface $serializer;

    public function __construct()
    {
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function serialize(Person $person, string $format): string
    {
        return $this->serializer->serialize($person,$format);
    }

    public function deserialize($data, string $format)
    {
        return $this->serializer->deserialize($data, Person::class, $format);
    }
}