<?php

namespace App\Cache;

use App\Serialization\Person;
use App\Serialization\StrategySerializer;
use Psr\Log\LoggerAwareTrait;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class PhpArrayCacheCommand extends Command
{
    use LoggerAwareTrait;

    private StrategySerializer $strategySerializer;

    protected static $defaultName = 'app:cache';

    protected static $defaultDescription = 'Cacheing a serialized person';

    private string $strategyType;

    public function __construct(string $strategyType,LoggerInterface $logger, StrategySerializer $strategySerializer)
    {
        $this->strategyType = $strategyType;
        $this->strategySerializer = $strategySerializer;
        $this->logger = $logger;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input,$output);
        $strategy = $this->strategySerializer->createStrategy($this->strategyType);
        $cache = new PhpArrayCacheAdapter();
        $cacheItem = $cache->getItem('person');

        if (!$cacheItem->isHit()) {
            $person = new Person('Andrei', 30);
            $serializerPerson = $strategy->serialize($person,'json');
            $cacheItem->set($serializerPerson);
            $cache->save($cacheItem);
            $io->info('Miss');
        }

        $cacheItem = $cache->getItem('person');

        if ($cacheItem->isHit()) {
            $io->info('SUCCESS');

            return Command::SUCCESS;
        }

        $io->info('FAILURE');

        return Command::FAILURE;
    }
}