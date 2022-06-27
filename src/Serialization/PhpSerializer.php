<?php

namespace App\Serialization;

use App\Cache\PersonMarkerInterface;
use App\Entity\Person;

class PhpSerializer implements StrategyInterface
{
    public function serialize(PersonMarkerInterface $person, string $format)
    {
        if( $format == 'xml') {
            return $person->serialize();
        }
        return $person->jsonSerialize();
    }

    public function deserialize($data, string $format): PersonMarkerInterface
    {
        $person = new Person();
        if ($format == 'xml') {
            return $person->unserialize($data);
        }

        $deserializedObject = json_decode($data);
        $person->setName($deserializedObject->name);
        $person->setAge($deserializedObject->age);

        return $person;
    }
}