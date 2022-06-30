<?php

namespace App\EventSubscriber;

use App\Cache\DoctrineCacheAdapter;
use App\Entity\Person;
use App\Serialization\StrategySerializer;
use Doctrine\Bundle\DoctrineBundle\EventSubscriber\EventSubscriberInterface;
use Doctrine\ORM\Event\OnFlushEventArgs;
use Doctrine\ORM\Events;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Cache\InvalidArgumentException;

class DoctrineActivitySubscriber implements EventSubscriberInterface
{
    private string $strategyType;

    private CacheItemPoolInterface $adapter;

    public function __construct(DoctrineCacheAdapter $adapter, string $strategyType)
    {
        $this->adapter = $adapter;
        $this->strategyType = $strategyType;
    }

    public function getSubscribedEvents()
    {
        return [
            Events::onFlush => 'onFlush',
            ];
    }

    /**
     * @throws InvalidArgumentException
     */
    public function onFlush(OnFlushEventArgs $args): void
    {
        $em = $args->getEntityManager();
        $uow = $em->getUnitOfWork();

        foreach ($uow->getScheduledEntityUpdates() as $entity) {
            if ($entity instanceof Person) {
                $cache = $this->updateCache($entity);
                $uow->computeChangeSet($em->getClassMetadata(get_class($cache)),$cache);
            }
        }
    }

    public function updateCache($entity)
    {
        $serializer = new StrategySerializer();
        $strategy = $serializer->createStrategy($this->strategyType);

        $cacheItem = $this->adapter->getItem($entity->getId());

        $serializedPerson = $strategy->serialize($entity, 'json');
        $cacheItem->setExpirationDate(new \DateTime("+1 hour"));
        $cacheItem->set($serializedPerson);
        $this->adapter->save($cacheItem);

        return $cacheItem;
    }
}