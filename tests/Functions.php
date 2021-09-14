<?php

declare(strict_types=1);

namespace Tests;

use Fig\Http\Message\StatusCodeInterface;
use function Nekofar\Slim\Pest\delete;
use function Nekofar\Slim\Pest\deleteJson;
use function Nekofar\Slim\Pest\get;
use function Nekofar\Slim\Pest\getJson;
use function Nekofar\Slim\Pest\options;
use function Nekofar\Slim\Pest\optionsJson;
use function Nekofar\Slim\Pest\patch;
use function Nekofar\Slim\Pest\patchJson;
use function Nekofar\Slim\Pest\post;
use function Nekofar\Slim\Pest\postJson;
use function Nekofar\Slim\Pest\put;
use function Nekofar\Slim\Pest\putJson;
use function Nekofar\Slim\Pest\withHeader;
use function Nekofar\Slim\Pest\withHeaders;
use function Nekofar\Slim\Pest\withToken;

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
    getJson('/json')
        ->assertOk()
        ->assertJson(['hello' => 'world']);
});

it('can send a post request with json data and receive json in response', function (): void {
    postJson('/json')
        ->assertOk()
        ->assertJson(['hello' => 'world']);
});

it('can send a put request with json data and receive json in response', function (): void {
    putJson('/json')
        ->assertOk()
        ->assertJson(['hello' => 'world']);
});

it('can send a patch request with json data and receive json in response', function (): void {
    patchJson('/json')
        ->assertOk()
        ->assertJson(['hello' => 'world']);
});

it('can send a delete request with json data and receive json in response', function (): void {
    deleteJson('/json')
        ->assertOk()
        ->assertJson(['hello' => 'world']);
});

it('can send an options request with json data and receive json in response', function (): void {
    optionsJson('/json')
        ->assertOk()
        ->assertJson(['hello' => 'world']);
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
