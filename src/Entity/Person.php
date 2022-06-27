<?php

namespace App\Entity;

use App\Cache\PersonMarkerInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Encoder\XmlEncoder;

/**
 * @ORM\Entity(repositoryClass=PersonRepository::class)
 */
class Person implements PersonMarkerInterface,\Serializable,\JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=100)
     */
    private string $name;

    /**
     * @ORM\Column(type="integer")
     */
    private int $age;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge(int $age)
    {
        $this->age = $age;

        return $this;
    }

    public function getAge()
    {
        return $this->age;
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