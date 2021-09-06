<?php

declare(strict_types=1);

namespace Pest\Slim;

/**
 * Define additional headers to be sent with the request.
 *
 * @param array<string, string> $headers
 */
function withHeaders(array $headers): TestCase
{
    return test()->withHeaders(...func_get_args());
}

/**
 * Add a header to be sent with the request.
 */
function withHeader(string $name, string $value): TestCase
{
    return test()->withHeader(...func_get_args());
}

/**
 * Flush all the configured headers.
 */
function flushHeaders(): TestCase
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
