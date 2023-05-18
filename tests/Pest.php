<?php

declare(strict_types=1);

uses()
    ->beforeEach(function (): void {
        $app = require __DIR__.'/../resources/bootstrap.php';

        // @phpstan-ignore-next-line
        $this->setUpApp($app);
    })
    ->in(__DIR__);
