<?php
declare(strict_types=1);

namespace App\Application\EventListener;


use App\Application\Event\TestEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class TestEventListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            TestEvent::NAME => 'onTestEvent'
        ];
    }

    public function onTestEvent(TestEvent $event)
    {
        dump($event);
    }

}