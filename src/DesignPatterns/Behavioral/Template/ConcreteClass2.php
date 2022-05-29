<?php

namespace App\DesignPatterns\Behavioral\Template;

class ConcreteClass2 extends AbstractClass
{
    protected function requiredOperations1(): void
    {
        echo "ConcreteClass2 says: Implemented Op1\n";
    }

    protected function requiredOperations2(): void
    {
        echo "ConcreteClass2 says: Implemented Op2\n";
    }
}