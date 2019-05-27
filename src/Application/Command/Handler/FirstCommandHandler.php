<?php


namespace App\Application\Command\Handler;


use App\Application\Event\TestEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class FirstCommandHandler
{
    protected $dispatcher;

    public function __construct(EventDispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function handle()
    {
        echo 'Handler works' . PHP_EOL;
        $event = new TestEvent('Hello Event!');
        $this->dispatcher->dispatch(TestEvent::NAME, $event);
    }
}