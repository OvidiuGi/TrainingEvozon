<?php

namespace App\DesignPatterns\Behavioral\Memento;

class BookMark
{
    private string $title;

    private int $page;

    public function __construct(BookReader $bookReader)
    {
        $this->setPage($bookReader);
        $this->setTitle($bookReader);
    }

    public function getPage(BookReader $bookReader): void
    {
        $bookReader->setPage($this->page);
    }

    public function setPage(BookReader $bookReader): void
    {
        $this->page = $bookReader->getPage();
    }

    public function getTitle(BookReader $bookReader): void
    {
        $bookReader->setTitle($this->title);
    }

    public function setTitle(BookReader $bookReader): void
    {
        $this->title = $bookReader->getTitle();
    }
}