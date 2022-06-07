<?php

namespace App\DesignPatterns\Structural\Adapter\Example2;

class EBookAdapter implements BookInterface
{
    protected EBookInterface $eBook;

    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    public function turnPage(): void
    {
        $this->eBook->pressNext();
    }

    public function open(): void
    {
        $this->eBook->unlock();
    }

    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}