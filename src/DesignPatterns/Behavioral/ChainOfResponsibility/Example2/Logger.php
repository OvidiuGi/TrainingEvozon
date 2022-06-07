<?php

namespace App\DesignPatterns\Behavioral\ChainOfResponsibility\Example2;

abstract class Logger
{
    public const NONE = 0;
    public const INFO = 0b000001;
    public const DEBUG = 0b000010;
    public const WARNING = 0b000100;
    public const ERROR = 0b001000;
    public const FUNCTIONAL_MESSAGE = 0b010000;
    public const FUNCTIONAL_ERROR = 0b100000;
    public const ALL = 0b111111;

    protected int $logMask;

    protected ?Logger $next = null;

    public function __construct(int $mask)
    {
        $this->logMask = $mask;
    }

    public function setNext(Logger $nextLogger): Logger
    {
        $this->next = $nextLogger;

        return $nextLogger;
    }

    public function message(string $msg, int $severity): Logger
    {
        if ($severity & $this->logMask) {
            $this->writeMessage($msg);
        }

        if ($this->next !== null) {
            $this->next->message($msg, $severity);
        }

        return $this;
    }

    abstract protected function writeMessage(string $msg): void;
}