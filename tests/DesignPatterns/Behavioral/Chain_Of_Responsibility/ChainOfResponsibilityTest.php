<?php

namespace App\Tests\DesignPatterns\Behavioral\Chain_Of_Responsibility;

use App\DesignPatterns\Behavioral\Chain_Of_Responsibility\Authenticate;
use App\DesignPatterns\Behavioral\Chain_Of_Responsibility\CredentialChain;
use App\DesignPatterns\Behavioral\Chain_Of_Responsibility\RoleChain;
use App\DesignPatterns\Behavioral\Chain_Of_Responsibility\User;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilityTest extends TestCase
{
    public function testChain(): void
    {
        $chain = new CredentialChain();
        $chain->linkNext(new RoleChain());
        $auth = (new Authenticate($chain))->login(new User('hello', '123', 'STUDENT'));
        $this->assertTrue($auth);
        $auth = (new Authenticate($chain))->login(new User('hello','123','FARAON'));
        $this->assertFalse($auth);
    }
}