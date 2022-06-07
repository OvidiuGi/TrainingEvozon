<?php

namespace App\Tests\DesignPatterns\Behavioral\Observer\Example2;

use App\DesignPatterns\Behavioral\Observer\Example2\Phone;
use App\DesignPatterns\Behavioral\Observer\Example2\ShopObserver;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testObserver(): void
    {
        $shopCluj = new ShopObserver('Altex','Cluj-Napoca');
        $iPhone13 = new Phone('iPhone','Cea mai mare teapa', 6000);
        $iPhone13->attach($shopCluj);

        $shopIasi = new ShopObserver('MediaGalaxy','Iasi');
        $iPhone13->attach($shopIasi);

        $iPhone13->notify();

        echo "Produsele din magazinul din cluj\n";
        $shopCluj->getProducts();

        echo"Produsele din magazinul din Iasi\n";
        $shopIasi->getProducts();
    }
}