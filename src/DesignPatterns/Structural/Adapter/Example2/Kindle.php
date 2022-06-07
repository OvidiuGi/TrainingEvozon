<?php

namespace App\DesignPatterns\Structural\Adapter\Example2;

class Kindle implements EBookInterface
{
    private int $page;

    private int $totalPages;

    public function __construct(int $page, int $totalPages)
    {
        $this->page = $page;
        $this->totalPages = $totalPages;
    }
    public function unlock(): void
    {
        // TODO: Implement unlock() method.
    }

    public function pressNext(): void
    {
        $this->page++;
    }

    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}