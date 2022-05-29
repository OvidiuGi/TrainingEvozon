<?php

namespace App\Tests\DesignPatterns\Creational\AbstractFactory;

use App\DesignPatterns\Creational\AbstractFactory\HtmlFactory;
use App\DesignPatterns\Creational\AbstractFactory\JsonFactory;
use PHPUnit\Framework\TestCase;

class TextFactoryTest extends TestCase
{
    public function testHtmlTextFactory(): void
    {
        $factory = new HtmlFactory();
        $htmlText = $factory->createText("<h2>Test</h2>")->text;
        $this->assertSame("<h2>Test</h2>",$htmlText);
    }

    public function testJsonTextFactory(): void
    {
        $factory = new JsonFactory();
        $jsonText = $factory
            ->createText(
                "'name': 'Test','description': 'sample json content', 'version': '1.0.0'"
            )
            ->text;
        $this->assertSame(
            "'name': 'Test','description': 'sample json content', 'version': '1.0.0'",
            $jsonText
        );
    }
}