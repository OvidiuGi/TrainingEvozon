<?php

namespace App\Serialization;

class PhpSerializer implements StrategyInterface
{
    public function serialize(Person $person, string $format)
    {
        if( $format == 'xml') {
            return $person->serialize();
        }
        return $person->jsonSerialize();
    }

    public function deserialize($data, string $format): Person
    {
        $person = new Person('Unserialized',15);
        if ($format == 'xml') {
            return $person->unserialize($data);
        }

        $deserializedObject = json_decode($data);

        return new Person($deserializedObject->name,$deserializedObject->age);
    }
}