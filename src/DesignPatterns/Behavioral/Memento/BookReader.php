<?php

namespace App\DesignPatterns\Behavioral\Memento;

class BookReader
{
    private string $title;

    private int $page;

    public function __construct(string $title, int $page)
    {
        $this->setPage($page);
        $this->setTitle($title);
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}