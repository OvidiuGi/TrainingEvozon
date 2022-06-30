<?php

namespace App\Repository;

use App\Entity\CacheData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Psr\Cache\CacheItemInterface;

/**
 * @extends ServiceEntityRepository<CacheData>
 *
 * @method CacheData|null find($id, $lockMode = null, $lockVersion = null)
 * @method CacheItemInterface|null findOneBy(array $criteria, array $orderBy = null)
 * @method CacheData[]    findAll()
 * @method CacheData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CacheDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CacheData::class);
    }

    public function add(CacheItemInterface $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CacheItemInterface $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
