<?php
declare(strict_types=1);

namespace App\Application\EventSubscriber;


use App\Application\Event\TestEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class TestEventSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            TestEvent::NAME => 'onTestEvent'
        ];
    }

    public function onTestEvent(TestEvent $event)
    {
        echo 'TestEvent Works!';
    }

}