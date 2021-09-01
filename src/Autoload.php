<?php

declare(strict_types=1);

namespace Pest\Slim;

use Pest\Plugin;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

Plugin::uses(Example::class);

function example(string $argument): TestCase
{
    return test()->example(...func_get_args());
}

/**
 * Visit the given URI with a GET request.
 */
function get(string $uri, array $headers = []): ResponseInterface
{
    return test()->get(...func_get_args());
}

/**
 * Visit the given URI with a GET request, expecting a JSON response.
 */
function getJson(string $uri, array $headers = []): ResponseInterface
{
    return test()->getJson(...func_get_args());
}

/**
 * Visit the given URI with a POST request.
 */
function post(string $uri, array $data = [], array $headers = []): ResponseInterface
{
    return test()->post(...func_get_args());
}

/**
 * Visit the given URI with a POST request, expecting a JSON response.
 */
function postJson(string $uri, array $data = [], array $headers = []): ResponseInterface
{
    return test()->postJson(...func_get_args());
}

/**
 * Visit the given URI with a PUT request.
 */
function put(string $uri, array $data = [], array $headers = []): ResponseInterface
{
    return test()->put(...func_get_args());
}

/**
 * Visit the given URI with a PUT request, expecting a JSON response.
 */
function putJson(string $uri, array $data = [], array $headers = []): ResponseInterface
{
    return test()->putJson(...func_get_args());
}

/**
 * Visit the given URI with a PATCH request.
 */
function patch(string $uri, array $data = [], array $headers = []): ResponseInterface
{
    return test()->patch(...func_get_args());
}

/**
 * Visit the given URI with a PATCH request, expecting a JSON response.
 */
function patchJson(string $uri, array $data = [], array $headers = []): ResponseInterface
{
    return test()->patchJson(...func_get_args());
}

/**
 * Visit the given URI with a DELETE request.
 */
function delete(string $uri, array $data = [], array $headers = []): ResponseInterface
{
    return test()->delete(...func_get_args());
}

/**
 * Visit the given URI with a DELETE request, expecting a JSON response.
 */
function deleteJson(string $uri, array $data = [], array $headers = []): ResponseInterface
{
    return test()->deleteJson(...func_get_args());
}

/**
 * Visit the given URI with a OPTIONS request.
 */
function options(string $uri, array $data = [], array $headers = []): ResponseInterface
{
    return test()->options(...func_get_args());
}

/**
 * Visit the given URI with a OPTIONS request, expecting a JSON response.
 */
function optionsJson(string $uri, array $data = [], array $headers = []): ResponseInterface
{
    return test()->optionsJson(...func_get_args());
}
