<?php

namespace App\EventSubscriber;

use Doctrine\Bundle\DoctrineBundle\EventSubscriber\EventSubscriberInterface;

use Doctrine\ORM\Event\PreUpdateEventArgs;
use Doctrine\ORM\Events;

class DoctrineActivitySubscriber implements EventSubscriberInterface
{
    public function getSubscribedEvents()
    {
        return [Events::postUpdate => 'preUpdate'];
    }

    public function preUpdate(PreUpdateEventArgs $args): void
    {
        if(!$args->hasChangedField('value')) {
            return;
        }

        $newValue = $args->getObject();
        $newValue->setExpirationDate(null);
        $args->getObjectManager()->persist($newValue);
    }
}