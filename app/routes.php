<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes
$app->get('/', function (Request $request, Response $response, array $args) {
    $this->logger->info("Sample php project '/' route");
    return $this->renderer->render($response, 'index.html.twig', $args);
});
