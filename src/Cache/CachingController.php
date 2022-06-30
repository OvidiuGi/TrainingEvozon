<?php

namespace App\Cache;

use App\Entity\Person;
use App\Repository\PersonRepository;
use App\Serialization\StrategySerializer;
use Doctrine\ORM\EntityManagerInterface;
use Predis\Client;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Cache\InvalidArgumentException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(path="/cache")
 */
class CachingController extends AbstractController
{
    public string $redisPassword;

    public PersonRepository $personRepository;

    public string $strategyType;

    private CacheItemPoolInterface $adapter;

    private EntityManagerInterface $entityManager;

    public function __construct(
        string $strategyType,
        EntityManagerInterface $entityManager,
        DoctrineCacheAdapter $adapter,
        PersonRepository $personRepository,
        string $redisPassword
    ) {
        $this->entityManager = $entityManager;
        $this->redisPassword = $redisPassword;
        $this->strategyType = $strategyType;
        $this->adapter = $adapter;
        $this->personRepository = $personRepository;
    }

    /**
     * @Route(path="/{key}", methods={"GET"})
     * @throws InvalidArgumentException
     */
    public function cache(string $key): Response
    {
        $serializer = new StrategySerializer();
        $strategy = $serializer->createStrategy($this->strategyType);
        $cacheItem = $this->adapter->getItem($key);

        if ($cacheItem->checkExpired()) {
            $this->adapter->deleteItem($key);

            return new Response('Expired!', Response::HTTP_GONE);
        }

        if (!$cacheItem->isHit()) {
            $person = new Person();
            $person->setName('Maria');
            $person->setAge(20);
            $this->personRepository->add($person, true);
            $serializedPerson = $strategy->serialize($person, 'json');
            $cacheItem->set($serializedPerson);
            $this->adapter->save($cacheItem);
            $this->entityManager->flush();
            return new Response('Miss!', Response::HTTP_CREATED);
        }

        return new Response('Hit' . $cacheItem->get(), Response::HTTP_FOUND);
    }

    /**
     * @Route(methods={"PUT"})
     * @throws InvalidArgumentException
     */
    public function update(Request $request): Response
    {
        $requestData = $request->toArray();
        $searchedPerson = $this->personRepository->findOneBy(['id' => $requestData['id']]);

        if ($searchedPerson === null) {
            return new Response('Person not found', Response::HTTP_NOT_FOUND);
        }

        $searchedPerson->setName($requestData['name']);
        $searchedPerson->setAge($requestData['age']);

        $this->personRepository->update($searchedPerson, true);

        return new Response('Updated successfully', Response::HTTP_OK);
    }

    /**
     * @Route("/redis/{key}", methods={"GET"})
     */
    public function redisCache(string $key): Response
    {
        $client = new Client();
        $client->auth($this->redisPassword);
        $serializer = new StrategySerializer();
        $strategy = $serializer->createStrategy($this->strategyType);
        $cacheItem = $client->get($key);
        $client->expire($key, 1);
        $client->save();
        var_dump($cacheItem);
        if ($cacheItem == null) {
            $person = new Person();
            $person->setName('Mihai');
            $person->setAge(20);
            $this->personRepository->add($person, true);
            $serializedPerson = $strategy->serialize($person, 'json');
            $client->set($key, $serializedPerson);

            $client->persist($key);
            $client->save();

            return new Response('Miss', Response::HTTP_CREATED);
        }

        return new Response('Hit ' . $cacheItem, Response::HTTP_FOUND);
    }
}