<?php

namespace App\Cache;

use App\Entity\Person;
use App\Repository\PersonRepository;
use App\Serialization\StrategySerializer;
use Psr\Cache\CacheItemPoolInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(path="/cache")
 */
class CachingController extends AbstractController
{
    public PersonRepository $personRepository;

    public string $strategyType;

    private CacheItemPoolInterface $adapter;

    public function __construct(
        string $strategyType,
        DoctrineCacheAdapter $adapter,
        PersonRepository $personRepository
    )
    {
        $this->strategyType = $strategyType;
        $this->adapter = $adapter;
        $this->personRepository = $personRepository;
    }

    /**
     * @Route(methods={"GET"})
     */
    public function cache()
    {
        $serializer = new StrategySerializer();
        $strategy = $serializer->createStrategy($this->strategyType);
        $cacheItem = $this->adapter->getItem('person2');

        if ($cacheItem->checkExpired())
        {
            $this->adapter->deleteItem('person2');

            return new Response('Expired!',Response::HTTP_GONE);
        }

        if (!$cacheItem->isHit()) {
            $person = new Person();
            $person->setName('Maria');
            $person->setAge(20);
            $this->personRepository->add($person, true);
            $serializedPerson = $strategy->serialize($person,'json');
            $cacheItem->set($serializedPerson);
            $this->adapter->save($cacheItem);

            return new Response('Miss!',Response::HTTP_CREATED);
        }

        return new Response('Hit' . $cacheItem->get(), Response::HTTP_OK);
    }

    /**
     * @Route(methods={"POST"})
     */
    public function update(Request $request)
    {
        $requestData = $request->toArray();

        if (!$this->adapter->hasItem($requestData['key']))
        {
            return new Response('Person not found', Response::HTTP_NOT_FOUND);
        }

        $serializer = new StrategySerializer();
        $strategy = $serializer->createStrategy($this->strategyType);

        $cacheItem = $this->adapter->getItem($requestData['key']);
        $deserializedPerson = $strategy->deserialize($cacheItem->get(),'json');

        $deserializedPerson->setName($requestData['name']);
        $deserializedPerson->setAge($requestData['age']);
        $serializedPerson = $strategy->serialize($deserializedPerson,'json');

        $cacheItem->set($serializedPerson);
        $this->adapter->save($cacheItem);

        return new Response('Updated successfully',Response::HTTP_OK);
    }

}