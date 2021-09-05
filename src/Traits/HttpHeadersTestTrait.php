<?php

declare(strict_types=1);

namespace Pest\Slim\Traits;

trait HttpHeadersTestTrait
{
    /**
     * Additional headers for the request.
     *
     * @var array
     */
    protected $defaultHeaders = [];

    /**
     * Define additional headers to be sent with the request.
     */
    public function withHeaders(array $headers): self
    {
        $this->defaultHeaders = array_merge($this->defaultHeaders, $headers);

        return $this;
    }

    /**
     * Add a header to be sent with the request.
     */
    public function withHeader(string $name, string $value): self
    {
        $this->defaultHeaders[$name] = $value;

        return $this;
    }

    /**
     * Add an authorization token for the request.
     */
    public function withToken(string $token, string $type = 'Bearer'): self
    {
        return $this->withHeader('Authorization', $type . ' ' . $token);
    }

    /**
     * Flush all the configured headers.
     */
    public function flushHeaders(): self
    {
        $this->defaultHeaders = [];

        return $this;
    }
}
