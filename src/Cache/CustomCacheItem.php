<?php

namespace App\Cache;

use Psr\Cache\CacheItemInterface;

class CustomCacheItem implements CacheItemInterface
{
    protected bool $isHit = false;

    private string $key;

    private ?string $value;

    public function __construct(string $key, ?string $value = null)
    {
        $this->key = $key;
        $this->value = $value;
    }
    public function getKey()
    {
        return $this->key;
    }

    public function get()
    {
        return $this->value;
    }

    public function isHit()
    {
        return $this->isHit;
    }

    public function setIsHit(bool $isHit): void
    {
        $this->isHit = $isHit;
    }

    public function set($value)
    {
        $this->value = $value;

        return $this;
    }

    public function expiresAt($expiration)
    {
        // TODO: Implement expiresAt() method.
    }

    public function expiresAfter($time)
    {
        // TODO: Implement expiresAfter() method.
    }
}