<?php

declare(strict_types=1);

use DI\Bridge\Slim\Bridge;
use DI\Container;
use Psr\Http\Message\MessageInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Fig\Http\Message\StatusCodeInterface;

// Create Container using PHP-DI
$container = new Container();

// Configure the application via container
$app = Bridge::create($container);

// Add Routing Middleware
$app->addRoutingMiddleware();

// Add Error Middleware
$app->addErrorMiddleware(false, false, false);

$app->map(['HEAD'], '/head/{exists}', function (Response $response, string $exists): Response {
    $code = 'true' === $exists ? StatusCodeInterface::STATUS_OK : StatusCodeInterface::STATUS_NOT_FOUND;
    return $response->withStatus($code);
});

$app->any('/status/{code}', function (Response $response, int $code): Response {
    return $response->withStatus($code);
});

$app->any('/text/{type}', function (Response $response, string $type): Response {
    if ('plain' === $type) {
        $response->getBody()->write('hello, world');
    } elseif ('html' === $type) {
        $response->getBody()->write('<p>hello, <i>world</i></p>');
    }

    return $response;
});

$app->any('/json/{type}', function (Response $response, string $type): Response {
    if ('one' === $type) {
        $response->getBody()->write('{"hello":"world"}');
    } elseif ('two' === $type) {
        $response->getBody()->write('{"foo":"bar","baz":"qux"}');
    } elseif ('third' === $type) {
        $response->getBody()->write('[{"foo":"bar","baz":"qux"}]');
    }

    return $response;
});

$app->get('/head/{type}', function (Request $request, Response $response, string $type): Response {
    if ('test' === $type) {
        $response = $response->withHeader('X-Test', $request->getHeader('X-Test'));
    } elseif ('auth' === $type) {
        $response = $response->withHeader('Authorization', $request->getHeader('Authorization'));
    }

    return $response;
});

return $app;
