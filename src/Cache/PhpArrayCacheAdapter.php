<?php

namespace App\Cache;

use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;

class PhpArrayCacheAdapter implements CacheItemPoolInterface
{
    private $items;

    public function __construct($array = [])
    {
        $this->items = $array;
    }

    public function getItem($key)
    {
        if (!array_key_exists($key, $this->items)) {
            $this->items[$key] = new CustomCacheItem($key);

            return $this->items[$key];
        }

        $this->items[$key]->setIsHit(true);

        return $this->items[$key];
    }

    public function getItems(array $keys = array())
    {
        // TODO: Implement getItems() method.
    }

    public function hasItem($key)
    {
        // TODO: Implement hasItem() method.
    }

    public function clear()
    {
        // TODO: Implement clear() method.
    }

    public function deleteItem($key)
    {
        // TODO: Implement deleteItem() method.
    }

    public function deleteItems(array $keys)
    {
        // TODO: Implement deleteItems() method.
    }

    public function save(CacheItemInterface $item)
    {
        $this->items[$item->getKey()] = $item;
    }

    public function saveDeferred(CacheItemInterface $item)
    {
        // TODO: Implement saveDeferred() method.
    }

    public function commit()
    {
        // TODO: Implement commit() method.
    }
}