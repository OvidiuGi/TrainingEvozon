<?php

namespace App\Cache;

use App\Entity\CacheData;
use App\Repository\CacheDataRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;

class DoctrineCacheAdapter implements CacheItemPoolInterface
{
    private CacheDataRepository $cacheRepository;

    private EntityManagerInterface $entityManager;

    public function __construct(CacheDataRepository $repository, EntityManagerInterface $entityManager)
    {
        $this->cacheRepository = $repository;
        $this->entityManager = $entityManager;
    }

    public function getItem($key)
    {
        $item = $this->cacheRepository->findOneBy(['dataKey' => $key]);

        if ($item === null)
        {
            $newCacheItem = new CacheData();
            $newCacheItem->setKey($key);
            $date = new \DateTime();
            $date->add(new \DateInterval('PT3600S'));
            $newCacheItem->setExpirationDate($date);

            return $newCacheItem;
        }

        $item->setIsHit(true);
        $this->entityManager->persist($item);
        $this->entityManager->flush();

        return $item;
    }

    public function getItems(array $keys = array())
    {
        // TODO: Implement getItems() method.
    }

    public function hasItem($key)
    {
        if($this->cacheRepository->findOneBy(['dataKey' => $key]) == null)
        {
            return false;
        }

        return true;
    }

    public function clear()
    {
        // TODO: Implement clear() method.
    }

    public function deleteItem($key)
    {
        $item = $this->cacheRepository->findOneBy(['dataKey' => $key]);
        $this->cacheRepository->remove($item,true);
    }

    public function deleteItems(array $keys)
    {
        // TODO: Implement deleteItems() method.
    }

    public function save(CacheItemInterface $item)
    {
        $this->cacheRepository->add($item,true);
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