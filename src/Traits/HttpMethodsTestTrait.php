<?php

declare(strict_types=1);

namespace Pest\Slim\Traits;

use Fig\Http\Message\RequestMethodInterface;
use Psr\Http\Message\ResponseInterface;

trait HttpMethodsTestTrait
{
    /**
     * Visit the given URI with a GET request.
     */
    public function get(string $uri, array $headers = []): ResponseInterface
    {
        $request = $this->createRequest(RequestMethodInterface::METHOD_GET, $uri);

        foreach ($headers as $name => $value) {
            $request = $request->withHeader($name, $value);
        }

        return $this->app->handle($request);
    }

    /**
     * Visit the given URI with a GET request, expecting a JSON response.
     */
    public function getJson(string $uri, array $headers = []): ResponseInterface
    {
        $request = $this->createJsonRequest(RequestMethodInterface::METHOD_GET, $uri);

        foreach ($headers as $name => $value) {
            $request = $request->withHeader($name, $value);
        }

        return $this->app->handle($request);
    }

    /**
     * Visit the given URI with a POST request.
     */
    public function post(string $uri, array $data = [], array $headers = []): ResponseInterface
    {
        $request = $this->createFormRequest(RequestMethodInterface::METHOD_POST, $uri, $data);

        foreach ($headers as $name => $value) {
            $request = $request->withHeader($name, $value);
        }

        return $this->app->handle($request);
    }

    /**
     * Visit the given URI with a POST request, expecting a JSON response.
     */
    public function postJson(string $uri, array $data = [], array $headers = []): ResponseInterface
    {
        $request = $this->createJsonRequest(RequestMethodInterface::METHOD_POST, $uri, $data);

        foreach ($headers as $name => $value) {
            $request = $request->withHeader($name, $value);
        }

        return $this->app->handle($request);
    }

    /**
     * Visit the given URI with a PUT request.
     */
    public function put(string $uri, array $data = [], array $headers = []): ResponseInterface
    {
        $request = $this->createFormRequest(RequestMethodInterface::METHOD_PUT, $uri, $data);

        foreach ($headers as $name => $value) {
            $request = $request->withHeader($name, $value);
        }

        return $this->app->handle($request);
    }

    /**
     * Visit the given URI with a PUT request, expecting a JSON response.
     */
    public function putJson(string $uri, array $data = [], array $headers = []): ResponseInterface
    {
        $request = $this->createJsonRequest(RequestMethodInterface::METHOD_PUT, $uri, $data);

        foreach ($headers as $name => $value) {
            $request = $request->withHeader($name, $value);
        }

        return $this->app->handle($request);
    }

    /**
     * Visit the given URI with a PATCH request.
     */
    public function patch(string $uri, array $data = [], array $headers = []): ResponseInterface
    {
        $request = $this->createFormRequest(RequestMethodInterface::METHOD_PATCH, $uri, $data);

        foreach ($headers as $name => $value) {
            $request = $request->withHeader($name, $value);
        }

        return $this->app->handle($request);
    }

    /**
     * Visit the given URI with a PATCH request, expecting a JSON response.
     */
    public function patchJson(string $uri, array $data = [], array $headers = []): ResponseInterface
    {
        $request = $this->createJsonRequest(RequestMethodInterface::METHOD_PATCH, $uri, $data);

        foreach ($headers as $name => $value) {
            $request = $request->withHeader($name, $value);
        }

        return $this->app->handle($request);
    }

    /**
     * Visit the given URI with a DELETE request.
     */
    public function delete(string $uri, array $data = [], array $headers = []): ResponseInterface
    {
        $request = $this->createFormRequest(RequestMethodInterface::METHOD_DELETE, $uri, $data);

        foreach ($headers as $name => $value) {
            $request = $request->withHeader($name, $value);
        }

        return $this->app->handle($request);
    }

    /**
     * Visit the given URI with a DELETE request, expecting a JSON response.
     */
    public function deleteJson(string $uri, array $data = [], array $headers = []): ResponseInterface
    {
        $request = $this->createJsonRequest(RequestMethodInterface::METHOD_DELETE, $uri, $data);

        foreach ($headers as $name => $value) {
            $request = $request->withHeader($name, $value);
        }

        return $this->app->handle($request);
    }

    /**
     * Visit the given URI with an OPTIONS request.
     */
    public function options(string $uri, array $data = [], array $headers = []): ResponseInterface
    {
        $request = $this->createFormRequest(RequestMethodInterface::METHOD_PATCH, $uri, $data);

        foreach ($headers as $name => $value) {
            $request = $request->withHeader($name, $value);
        }

        return $this->app->handle($request);
    }

    /**
     * Visit the given URI with an OPTIONS request, expecting a JSON response.
     */
    public function optionsJson(string $uri, array $data = [], array $headers = []): ResponseInterface
    {
        $request = $this->createJsonRequest(RequestMethodInterface::METHOD_OPTIONS, $uri, $data);

        foreach ($headers as $name => $value) {
            $request = $request->withHeader($name, $value);
        }

        return $this->app->handle($request);
    }
}
