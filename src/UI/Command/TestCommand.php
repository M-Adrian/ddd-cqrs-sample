<?php


namespace App\UI\Command;


use App\Application\Command\FirstCommand;
use League\Tactician\CommandBus;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{
    protected static $defaultName = 'app:test';

    private $commandBus;

    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Test')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $command = new FirstCommand();
        $this->commandBus->handle($command);
    }

}