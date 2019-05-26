<?php
declare(strict_types=1);

namespace App\Application\Event;


use Symfony\Component\EventDispatcher\Event;

class TestEvent extends Event
{
    const NAME = 'test.event';

    protected $test;

    public function __construct($test)
    {
        $this->test = $test;
    }

    public function getTest()
    {
        return $this->test;
    }
}