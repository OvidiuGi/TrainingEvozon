<?php

namespace App\DesignPatterns\Behavioral\Iterator;

use Exception;
use Traversable;

class LineCollection implements \Countable, \IteratorAggregate
{
    private array $lines;

    public function getLines(): ?array
    {
        return $this->lines;
    }

    public function addLine(Line $line): self
    {
        $this->lines[] = $line;

        return $this;
    }

    public function removeLine(Line $line)
    {
        foreach ($this->lines as $key => $value) {
            if ($value === $line) {
                unset($this->lines[$key]);

                break;
            }
        }
    }

    public function getIterator(): LineIterator
    {
        return new LineIterator($this);
    }

    public function getReverseIterator(): LineIterator
    {
        return new LineIterator($this, true);
    }

    public function count(): int
    {
        return count($this->lines);
    }
}