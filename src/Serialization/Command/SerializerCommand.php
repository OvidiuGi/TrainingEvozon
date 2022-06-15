<?php

namespace App\Serialization\Command;

use App\Serialization\Person;
use App\Serialization\StrategySerializer;
use Psr\Log\LoggerAwareTrait;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class SerializerCommand extends Command
{
    use LoggerAwareTrait;

    private StrategySerializer $strategySerializer;

    protected static $defaultName = 'app:serialize';

    protected static $defaultDescription = 'Serialize a Person';

    private string $strategyType;

    public function __construct(string $strategyType, LoggerInterface $logger, StrategySerializer $strategySerializer)
    {
        $this->logger = $logger;
        $this->strategyType = $strategyType;
        $this->strategySerializer = $strategySerializer;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $person = new Person('Marian',15);

        $strategy = $this->strategySerializer->createStrategy($this->strategyType);

        $serializedData = $strategy->serialize($person, 'xml');
        $deserializedData = $strategy->deserialize($serializedData, 'xml');

        $this->logger->info(
            'Succesfully serialized Person',
            [
                'StrategyType' => $this->strategyType,
                'SerializedData' => $serializedData,
                'DeserializedData' => $deserializedData,
            ]
        );

        $io->success('Successful');

        return Command::SUCCESS;
    }
}