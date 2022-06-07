<?php

namespace App\Tests\DesignPatterns\Structural\Adapter\Example2;

use App\DesignPatterns\Structural\Adapter\Example2\EBookAdapter;
use App\DesignPatterns\Structural\Adapter\Example2\Kindle;
use App\DesignPatterns\Structural\Adapter\Example2\PaperBook;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testAdapter(): void
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();
        $this->assertEquals(2, $book->getPage());

        $eBook = new Kindle(1,150);
        $eBook->unlock();
        $eBook->pressNext();
        $eBook->pressNext();
        $this->assertEquals(3, $eBook->getPage()[0]);

        $eBookAdaptee = new EBookAdapter(new Kindle(1,200));
        $eBookAdaptee->open();
        $eBookAdaptee->turnPage();
        $this->assertEquals(2,$eBookAdaptee->getPage());
    }
}