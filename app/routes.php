<?php

use Slim\Http\Request;
use Slim\Http\Response;

use SamplePhpProject\Domain\Events\TestEvent;

// Routes
$app->get('/', function (Request $request, Response $response, array $args) {
    $this->logger->info("Sample php project '/' route");
    $event = new TestEvent("sample property");
    $this->dispatcher->dispatch(TestEvent::NAME, $event);
    return $this->renderer->render($response, 'index.html.twig', $args);
});
