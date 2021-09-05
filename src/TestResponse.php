<?php

declare(strict_types=1);

namespace Pest\Slim;

use Slim\Psr7\Response;

/**
 * @mixin Response
 */
final class TestResponse
{
    /**
     * The response to delegate to.
     *
     * @var Response
     */
    public $baseResponse;

    /**
     * Create a new test response instance.
     *
     * @return void
     */
    public function __construct(Response $response)
    {
        $this->baseResponse = $response;
    }

    /**
     * Create a new TestResponse from another response.
     *
     * @return static
     */
    public static function fromBaseResponse(Response $response): TestResponse
    {
        return new static($response);
    }

    /**
     * Dynamically access base response parameters.
     *
     * @return mixed
     */
    public function __get(string $key)
    {
        /* @phpstan-ignore-next-line */
        return $this->baseResponse->{$key};
    }

    /**
     * Proxy isset() checks to the underlying base response.
     *
     * @return mixed
     */
    public function __isset(string $key)
    {
        /* @phpstan-ignore-next-line */
        return isset($this->baseResponse->{$key});
    }

    /**
     * Handle dynamic calls into macros or pass missing methods to the base response.
     *
     * @param array<string,mixed> $args
     *
     * @return mixed
     */
    public function __call(string $method, array $args)
    {
        /* @phpstan-ignore-next-line */
        return $this->baseResponse->{$method}(...$args);
    }
}
