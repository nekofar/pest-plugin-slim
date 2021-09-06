<?php

declare(strict_types=1);

namespace Pest\Slim\Tests;

use Fig\Http\Message\StatusCodeInterface;
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
use function Pest\Slim\withHeader;
use function Pest\Slim\withHeaders;
use function Pest\Slim\withToken;

it('can send a get request and receive text in response', function (): void {
    get('/text')
        ->assertOk()
        ->assertSee('hello, world')
        ->assertDontSee('see, not');
});

it('can send a post request and receive text in response', function (): void {
    post('/text')
        ->assertOk()
        ->assertSee('hello, world');
});

it('can send a put request and receive text in response', function (): void {
    put('/text')
        ->assertOk()
        ->assertSee('hello, world');
});

it('can send a patch request and receive text in response', function (): void {
    patch('/text')
        ->assertOk()
        ->assertSee('hello, world');
});

it('can send a delete request and receive text in response', function (): void {
    delete('/text')
        ->assertOk()
        ->assertSee('hello, world');
});

it('can send an options request and receive text in response', function (): void {
    options('/text')
        ->assertOk()
        ->assertSee('hello, world');
});

it('can send a get request with json data and receive json in response', function (): void {
    $response = getJson('/json')
        ->assertOk()
        ->assertJson();
    /* @phpstan-ignore-next-line */
    expect((string) $response->getBody())->json()->hello->toBe('world');
});

it('can send a post request with json data and receive json in response', function (): void {
    $response = postJson('/json')
        ->assertOk()
        ->assertJson();
    /* @phpstan-ignore-next-line */
    expect((string) $response->getBody())->json()->hello->toBe('world');
});

it('can send a put request with json data and receive json in response', function (): void {
    $response = putJson('/json')
        ->assertOk()
        ->assertJson();
    /* @phpstan-ignore-next-line */
    expect((string) $response->getBody())->json()->hello->toBe('world');
});

it('can send a patch request with json data and receive json in response', function (): void {
    $response = patchJson('/json')
        ->assertOk()
        ->assertJson();
    /* @phpstan-ignore-next-line */
    expect((string) $response->getBody())->json()->hello->toBe('world');
});

it('can send a delete request with json data and receive json in response', function (): void {
    $response = deleteJson('/json')
        ->assertOk()
        ->assertJson();
    /* @phpstan-ignore-next-line */
    expect((string) $response->getBody())->json()->hello->toBe('world');
});

it('can send an options request with json data and receive json in response', function (): void {
    $response = optionsJson('/json')
        ->assertOk()
        ->assertJson();
    /* @phpstan-ignore-next-line */
    expect((string) $response->getBody())->json()->hello->toBe('world');
});

it('can send a request and receive not found status in response', function (): void {
    post('/')->assertNotFound();
});

it('can send a request and receive created status in response', function (): void {
    post('/created')
        ->assertCreated()
        ->assertNoContent(StatusCodeInterface::STATUS_CREATED);
});

it('can send a request and receive forbidden status in response', function (): void {
    post('/forbidden')->assertForbidden();
});

it('can send a request and receive unauthorized status in response', function (): void {
    post('/unauthorized')->assertUnauthorized();
});

it('can send a request and receive unprocessable status in response', function (): void {
    post('/unprocessable')->assertUnprocessable();
});

it('can request with header and get response headers', function (): void {
    withHeader('X-Test', 'Test')
        ->get('/header')
        ->assertOk()
        ->assertHeader('X-Test', 'Test');
});

it('can send a request with multiple headers at once', function (): void {
    withHeaders(['X-Test' => 'Test'])
        ->get('/header')
        ->assertOk()
        ->assertHeader('X-Test', 'Test');
});

it('can send a request with authorization token in the headers', function (): void {
    withToken(base64_encode('test:123456'), 'Basic')
        ->get('/token')
        ->assertOk()
        ->assertHeaderMissing('X-Test')
        ->assertHeader('Authorization', 'Basic ' . base64_encode('test:123456'));
});
