<?php

declare(strict_types=1);

namespace Pest\Slim\Tests;

use function Pest\Slim\delete;
use function Pest\Slim\deleteJson;
use function Pest\Slim\get;
use function Pest\Slim\getJson;
use function Pest\Slim\options;
use function Pest\Slim\optionsJson;
use function Pest\Slim\patch;
use function Pest\Slim\patchJson;
use function Pest\Slim\post;
use function Pest\Slim\postJson;
use function Pest\Slim\put;
use function Pest\Slim\putJson;

it('can get text', function (): void {
    get('/text')
        ->assertOk()
        ->assertSee('hello, world');
});

it('can post text', function (): void {
    post('/text')
        ->assertOk()
        ->assertSee('hello, world');
});

it('can put text', function (): void {
    put('/text')
        ->assertOk()
        ->assertSee('hello, world');
});

it('can patch text', function (): void {
    patch('/text')
        ->assertOk()
        ->assertSee('hello, world');
});

it('can delete text', function (): void {
    delete('/text')
        ->assertOk()
        ->assertSee('hello, world');
});

it('can options text', function (): void {
    options('/text')
        ->assertOk()
        ->assertSee('hello, world');
});

it('can get json', function (): void {
    $response = getJson('/json')
        ->assertOk()
        ->assertJson();
    /* @phpstan-ignore-next-line */
    expect((string) $response->getBody())->json()->hello->toBe('world');
});

it('can post json', function (): void {
    $response = postJson('/json')
        ->assertOk()
        ->assertJson();
    /* @phpstan-ignore-next-line */
    expect((string) $response->getBody())->json()->hello->toBe('world');
});

it('can put json', function (): void {
    $response = putJson('/json')
        ->assertOk()
        ->assertJson();
    /* @phpstan-ignore-next-line */
    expect((string) $response->getBody())->json()->hello->toBe('world');
});

it('can patch json', function (): void {
    $response = patchJson('/json')
        ->assertOk()
        ->assertJson();
    /* @phpstan-ignore-next-line */
    expect((string) $response->getBody())->json()->hello->toBe('world');
});

it('can delete json', function (): void {
    $response = deleteJson('/json')
        ->assertOk()
        ->assertJson();
    /* @phpstan-ignore-next-line */
    expect((string) $response->getBody())->json()->hello->toBe('world');
});

it('can options json', function (): void {
    $response = optionsJson('/json')
        ->assertOk()
        ->assertJson();
    /* @phpstan-ignore-next-line */
    expect((string) $response->getBody())->json()->hello->toBe('world');
});
