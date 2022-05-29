<?php

namespace App\DesignPatterns\Behavioral\Iterator;

class Line
{
    private int $id;

    private string $name;

    private string $surname;

    public function __construct(int $id, string $name, string $surname)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function check(): bool
    {
        return true;
    }

    public function __toString(): string
    {
        return sprintf('%d, %s, %s', $this->id, $this->name, $this->surname);
    }
}
