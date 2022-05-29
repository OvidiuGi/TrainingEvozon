<?php

namespace App\DesignPatterns\Behavioral\Iterator;

class LineIterator implements \Iterator
{
    private LineCollection $lineCollection;

    private $position;

    private $reverse;

    public function __construct(LineCollection $lineCollection, bool $reverse = false)
    {
        $this->lineCollection = $lineCollection;
        $this->reverse = $reverse;
    }
    public function current(): ?Line
    {
        return $this->lineCollection->getLines()
            ? $this->lineCollection->getLines()[$this->position]
            : null;
    }

    public function next(): void
    {
        $this->position = $this->position + ($this->reverse ? -1 : 1);
    }

    public function key(): int
    {
        return is_null($this->position) ? 0 : $this->position;
    }

    public function valid(): bool
    {
        return $this->lineCollection->getLines() && isset($this->lineCollection->getLines()[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = $this->reverse ? $this->lineCollection->count() - 1 : 0;
    }
}