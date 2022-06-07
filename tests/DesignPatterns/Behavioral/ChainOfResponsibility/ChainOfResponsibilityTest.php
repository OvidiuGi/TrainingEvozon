<?php

namespace App\Tests\DesignPatterns\Behavioral\ChainOfResponsibility;

use App\DesignPatterns\Behavioral\ChainOfResponsibility\Authenticate;
use App\DesignPatterns\Behavioral\ChainOfResponsibility\CredentialChain;
use App\DesignPatterns\Behavioral\ChainOfResponsibility\RoleChain;
use App\DesignPatterns\Behavioral\ChainOfResponsibility\User;
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