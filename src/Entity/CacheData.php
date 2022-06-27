<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Psr\Cache\CacheItemInterface;

/**
 * @ORM\Entity(repositoryClass=CacheDataRepository::class)
 */
class CacheData implements CacheItemInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=100,unique=true)
     */
    private string $dataKey;

    /**
     * @ORM\Column(type="string",length=100)
     */
    private string $value;

    /**
     * @ORM\Column(type="boolean")
     */
    private bool $isHit = false;

    /**
     * @ORM\Column(type="datetime")
     */
    private ?\DateTime $expirationDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setExpirationDate(?\DateTime $date)
    {
        $this->expirationDate = $date;
    }

    public function setKey(string $key)
    {
        $this->dataKey = $key;

        return $this;
    }

    public function getKey()
    {
        return $this->dataKey;
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
    }

    public function expiresAt($expiration)
    {
        $this->expirationDate = $expiration;

    }

    public function expiresAfter($time)
    {
        //TODO
    }

    public function checkExpired(): bool
    {
        $date = new \DateTime();
        if($this->expirationDate <= $date)
        {
            $this->expirationDate = null;

            return true;
        }

        return false;
    }
}
