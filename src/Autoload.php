<?php

declare(strict_types=1);

namespace Nekofar\Slim\Pest;

use Nekofar\Slim\Test\TestResponse;
use Nekofar\Slim\Test\Traits\AppTestTrait;
use Pest\Plugin;
use PHPUnit\Framework\TestCase;

Plugin::uses(AppTestTrait::class);

/**
 * Define additional headers to be sent with the request.
 *
 * @param array<string, string> $headers
 *
 * @return mixed|TestCase
 */
function withHeaders(array $headers): mixed
{
    return test()->withHeaders(...func_get_args());
}

/**
 * Add a header to be sent with the request.
 *
 * @return mixed|TestCase
 */
function withHeader(string $name, string $value): mixed
{
    return test()->withHeader(...func_get_args());
}

/**
 * Add an authorization token for the request.
 *
 * @return mixed|TestCase
 */
function withToken(string $token, string $type = 'Bearer'): mixed
{
    return test()->withToken(...func_get_args());
}

/**
 * Set the request authentication credentials using Basic Authentication.
 *
 * @return mixed|TestCase
 */
function withBasicAuth(string $username, string $password): mixed
{
    return test()->withBasicAuth(...func_get_args());
}

/**
 * Flush all the configured headers.
 *
 * @return mixed|TestCase
 */
function flushHeaders(): mixed
{
    return test()->flushHeaders(...func_get_args());
}

/**
 * Visit the given URI with a GET request.
 *
 * @param array<string, string> $headers
 */
function get(string $uri, array $headers = []): TestResponse
{
    return test()->get(...func_get_args());
}

/**
 * Visit the given URI with a GET request, expecting a JSON response.
 *
 * @param array<string, string> $headers
 */
function getJson(string $uri, array $headers = []): TestResponse
{
    return test()->getJson(...func_get_args());
}

/**
 * Visit the given URI with a POST request.
 *
 * @param array<string, mixed>  $data
 * @param array<string, string> $headers
 */
function post(string $uri, array $data = [], array $headers = []): TestResponse
{
    return test()->post(...func_get_args());
}

/**
 * Visit the given URI with a POST request, expecting a JSON response.
 *
 * @param array<string, mixed>  $data
 * @param array<string, string> $headers
 */
function postJson(string $uri, array $data = [], array $headers = []): TestResponse
{
    return test()->postJson(...func_get_args());
}

/**
 * Visit the given URI with a PUT request.
 *
 * @param array<string, mixed>  $data
 * @param array<string, string> $headers
 */
function put(string $uri, array $data = [], array $headers = []): TestResponse
{
    return test()->put(...func_get_args());
}

/**
 * Visit the given URI with a PUT request, expecting a JSON response.
 *
 * @param array<string, mixed>  $data
 * @param array<string, string> $headers
 */
function putJson(string $uri, array $data = [], array $headers = []): TestResponse
{
    return test()->putJson(...func_get_args());
}

/**
 * Visit the given URI with a PATCH request.
 *
 * @param array<string, mixed>  $data
 * @param array<string, string> $headers
 */
function patch(string $uri, array $data = [], array $headers = []): TestResponse
{
    return test()->patch(...func_get_args());
}

/**
 * Visit the given URI with a PATCH request, expecting a JSON response.
 *
 * @param array<string, mixed>  $data
 * @param array<string, string> $headers
 */
function patchJson(string $uri, array $data = [], array $headers = []): TestResponse
{
    return test()->patchJson(...func_get_args());
}

/**
 * Visit the given URI with a DELETE request.
 *
 * @param array<string, mixed>  $data
 * @param array<string, string> $headers
 */
function delete(string $uri, array $data = [], array $headers = []): TestResponse
{
    return test()->delete(...func_get_args());
}

/**
 * Visit the given URI with a DELETE request, expecting a JSON response.
 *
 * @param array<string, mixed>  $data
 * @param array<string, string> $headers
 */
function deleteJson(string $uri, array $data = [], array $headers = []): TestResponse
{
    return test()->deleteJson(...func_get_args());
}

/**
 * Visit the given URI with a OPTIONS request.
 *
 * @param array<string, mixed>  $data
 * @param array<string, string> $headers
 */
function options(string $uri, array $data = [], array $headers = []): TestResponse
{
    return test()->options(...func_get_args());
}

/**
 * Visit the given URI with a OPTIONS request, expecting a JSON response.
 *
 * @param array<string, mixed>  $data
 * @param array<string, string> $headers
 */
function optionsJson(string $uri, array $data = [], array $headers = []): TestResponse
{
    return test()->optionsJson(...func_get_args());
}
