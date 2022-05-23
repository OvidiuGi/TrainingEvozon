<?php

namespace App\Tests\DesignPatterns\Structural\Adapter;

use App\DesignPatterns\Structural\Adapter\Client;
use App\DesignPatterns\Structural\Adapter\ClientAdapter;
use PHPUnit\Framework\TestCase;

class ClientAdapterTest extends TestCase
{
    public function testClientAdapter(): void
    {
        $client = new Client('Gigi','5010911070069');
        $clientAdapter = new ClientAdapter($client,20);
        $this->assertEquals(20,$clientAdapter->getAge());
    }
}