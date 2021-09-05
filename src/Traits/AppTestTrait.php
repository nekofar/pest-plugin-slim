<?php

declare(strict_types=1);

namespace Pest\Slim\Traits;

use Selective\TestTrait\Traits\ArrayTestTrait;
use Selective\TestTrait\Traits\ContainerTestTrait;
use Selective\TestTrait\Traits\HttpJsonTestTrait;
use Selective\TestTrait\Traits\HttpTestTrait;
use Selective\TestTrait\Traits\MockTestTrait;
use Selective\TestTrait\Traits\RouteTestTrait;
use Slim\App;

/**
 * Trait AppTestTrait.
 */
trait AppTestTrait
{
    use ArrayTestTrait;
    use ContainerTestTrait;
    use HttpTestTrait;
    use HttpJsonTestTrait;
    use HttpHeadersTestTrait;
    use HttpMethodsTestTrait;
    use MockTestTrait;
    use RouteTestTrait;

    /**
     * @var App
     */
    protected $app;

    protected function setUpApp(App $app): void
    {
        $this->app = $app;
        $this->setUpContainer($this->app->getContainer());
    }
}
