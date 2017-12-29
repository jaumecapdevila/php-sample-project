<?php

namespace SamplePhpProject\Domain\Events;


use Symfony\Component\EventDispatcher\Event;

class TestEvent extends Event
{
    const NAME = 'test.event';

    protected $property;

    /**
     * TestEvent constructor.
     * @param $property string
     */
    public function __construct(string $property)
    {
        $this->property = $property;
    }

    /**
     * @return string
     */
    public function property(): string
    {
        return $this->property;
    }
}