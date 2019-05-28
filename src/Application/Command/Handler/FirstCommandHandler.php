<?php


namespace App\Application\Command\Handler;


use App\Application\Event\TestEvent;
use App\Application\Transaction\TransactionManager;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class FirstCommandHandler
{
    protected $dispatcher;
    protected $transactionManager;

    public function __construct(EventDispatcherInterface $dispatcher, TransactionManager $transactionManager)
    {
        $this->dispatcher = $dispatcher;
        $this->transactionManager = $transactionManager;
    }

    public function handle()
    {
        echo 'Handler works' . PHP_EOL;
        $event = new TestEvent('Hello Event!');
        $this->dispatcher->dispatch(TestEvent::NAME, $event);
    }
}