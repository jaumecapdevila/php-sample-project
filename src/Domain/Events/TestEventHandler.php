<?php

namespace SamplePhpProject\Domain\Events;

use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\Event;

class TestEventHandler
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * TestEventHandler constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function handle(Event $event)
    {
        $this->logger->info(sprintf("Domain event with property '%s' handled", $event->property()));
    }
}