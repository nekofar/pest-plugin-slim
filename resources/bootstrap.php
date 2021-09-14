<?php

declare(strict_types=1);

use DI\Container;
use Fig\Http\Message\StatusCodeInterface as StatusCode;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

// Create Container using PHP-DI
$container = new Container();

// Configure the application via container
$app = AppFactory::createFromContainer($container);

// Add Routing Middleware
$app->addRoutingMiddleware();

// Add Error Middleware
$app->addErrorMiddleware(false, false, false);

$app->any('/text', function (Request $request, Response $response): Response {
    $response->getBody()->write('hello, world');

    return $response;
});

$app->any('/json', function (Request $request, Response $response): Response {
    $response->getBody()->write('{"hello":"world"}');

    return $response;
});

$app->get('/token', function (Request $request, Response $response): Response {
    return $response
        ->withHeader('Authorization', $request->getHeader('Authorization'))
        ->withStatus(StatusCode::STATUS_OK);
});

$app->get('/header', function (Request $request, Response $response): Response {
    return $response
        ->withHeader('X-Test', $request->getHeader('X-Test'))
        ->withStatus(StatusCode::STATUS_OK);
});

$app->post('/created', function (Request $request, Response $response): Response {
    return $response
        ->withStatus(StatusCode::STATUS_CREATED);
});

$app->post('/forbidden', function (Request $request, Response $response): Response {
    return $response
        ->withStatus(StatusCode::STATUS_FORBIDDEN);
});

$app->post('/unauthorized', function (Request $request, Response $response): Response {
    return $response
        ->withStatus(StatusCode::STATUS_UNAUTHORIZED);
});

$app->post('/unprocessable', function (Request $request, Response $response): Response {
    return $response
        ->withStatus(StatusCode::STATUS_UNPROCESSABLE_ENTITY);
});

return $app;