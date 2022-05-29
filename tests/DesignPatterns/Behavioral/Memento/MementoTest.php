<?php

namespace App\Tests\DesignPatterns\Behavioral\Memento;

use App\DesignPatterns\Behavioral\Memento\BookMark;
use App\DesignPatterns\Behavioral\Memento\BookReader;
use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{
    public function testMemento(): void
    {
        $bookReader = new BookReader('Core PHP', 103);
        $bookMark = new BookMark($bookReader);
        $this->assertEquals(103, $bookReader->getPage());

        $bookReader->setPage(104);
        $bookMark->setPage($bookReader);
        $this->assertEquals(104, $bookReader->getPage());

        $bookReader->setPage(2005);
        $this->assertEquals(2005, $bookReader->getPage());

        $bookMark->getPage($bookReader);
        $this->assertEquals(104, $bookReader->getPage());
    }
}