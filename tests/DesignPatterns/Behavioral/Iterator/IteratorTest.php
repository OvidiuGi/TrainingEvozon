<?php

namespace App\Tests\DesignPatterns\Behavioral\Iterator;

use App\DesignPatterns\Behavioral\Iterator\Line;
use App\DesignPatterns\Behavioral\Iterator\LineCollection;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    public function testIterator(): void
    {
        $csvFile[0]['id'] = 1;
        $csvFile[0]['name'] = 'Gigi';
        $csvFile[0]['surname'] = 'Becali';
        $csvFile[1]['id'] = 2;
        $csvFile[1]['name'] = 'Mihai';
        $csvFile[1]['surname'] = 'Eminescu';

        $lineCollection = new LineCollection();
        foreach ($csvFile as $row) {
            $line = new Line($row['id'],$row['name'], $row['surname']);

            $lineCollection->addLine($line);
        }

        $this->assertEquals(2,$lineCollection->count());

        foreach ($lineCollection->getReverseIterator() as $line) {
            $this->assertTrue($line->check());
        }
    }
}