<?php

declare(strict_types=1);

namespace Pest\Slim;

use Pest\Slim\Traits\AppTestTrait;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use AppTestTrait;
}
