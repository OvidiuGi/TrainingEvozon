<?php

namespace App\Serialization;

use Symfony\Component\Serializer\Encoder\XmlEncoder;

class Person implements \Serializable,\JsonSerializable
{
    public string $name;

    public int $age;

    public function __construct(?string $name, ?int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function serialize()
    {
        $xmlEncoder =  new XmlEncoder();

        return $xmlEncoder->encode(['name' => $this->name, 'age' => $this->age], 'xml');
    }

    public function unserialize($data)
    {
        $xmlEncoder = new XmlEncoder();

        $decodedData = $xmlEncoder->decode($data, 'xml');
        return new self($decodedData['name'], $decodedData['age']);
    }

    public function jsonSerialize()
    {
        $dataArray = [
            'name' => $this->name,
            'age' => $this->age,
        ];

        return json_encode($dataArray);
    }
}