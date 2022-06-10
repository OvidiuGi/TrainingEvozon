<?php

namespace App\Serialization;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class SymfonySerializer implements StrategyInterface
{
    private SerializerInterface $serializer;

    public function __construct()
    {
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];

        $serializer = new Serializer($normalizers,$encoders);
        $this->serializer = $serializer;
    }

    public function serialize(Person $person, string $format): string
    {
        return $this->serializer->serialize($person, $format);
    }

    public function deserialize($data, string $format): Person
    {
        return $this->serializer->deserialize($data, Person::class, $format);
    }
}