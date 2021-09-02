<?php

declare(strict_types=1);

namespace Pest\Slim\Tests;

use Fig\Http\Message\StatusCodeInterface as StatusCode;
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
    $response = get('/text');

    expect($response->getStatusCode())->toEqual(StatusCode::STATUS_OK);
    $responseBody = (string) $response->getBody();
    expect($responseBody)->toEqual('hello, world');
});

it('can post text', function (): void {
    $response = post('/text');

    expect($response->getStatusCode())->toEqual(StatusCode::STATUS_OK);
    $responseBody = (string) $response->getBody();
    expect($responseBody)->toEqual('hello, world');
});

it('can put text', function (): void {
    $response = put('/text');

    expect($response->getStatusCode())->toEqual(StatusCode::STATUS_OK);
    $responseBody = (string) $response->getBody();
    expect($responseBody)->toEqual('hello, world');
});

it('can patch text', function (): void {
    $response = patch('/text');

    expect($response->getStatusCode())->toEqual(StatusCode::STATUS_OK);
    $responseBody = (string) $response->getBody();
    expect($responseBody)->toEqual('hello, world');
});

it('can delete text', function (): void {
    $response = delete('/text');

    expect($response->getStatusCode())->toEqual(StatusCode::STATUS_OK);
    $responseBody = (string) $response->getBody();
    expect($responseBody)->toEqual('hello, world');
});

it('can options text', function (): void {
    $response = options('/text');

    expect($response->getStatusCode())->toEqual(StatusCode::STATUS_OK);
    $responseBody = (string) $response->getBody();
    expect($responseBody)->toEqual('hello, world');
});

it('can get json', function (): void {
    $response = getJson('/json');

    expect($response->getStatusCode())->toEqual(StatusCode::STATUS_OK);
    $responseBody = (string) $response->getBody();
    expect($responseBody)->toBeJson();
    expect($responseBody)->json()->hello->toBe('world');
});

it('can post json', function (): void {
    $response = postJson('/json');

    expect($response->getStatusCode())->toEqual(StatusCode::STATUS_OK);
    $responseBody = (string) $response->getBody();
    expect($responseBody)->toBeJson();
    expect($responseBody)->json()->hello->toBe('world');
});

it('can put json', function (): void {
    $response = putJson('/json');

    expect($response->getStatusCode())->toEqual(StatusCode::STATUS_OK);
    $responseBody = (string) $response->getBody();
    expect($responseBody)->toBeJson();
    expect($responseBody)->json()->hello->toBe('world');
});

it('can patch json', function (): void {
    $response = patchJson('/json');

    expect($response->getStatusCode())->toEqual(StatusCode::STATUS_OK);
    $responseBody = (string) $response->getBody();
    expect($responseBody)->toBeJson();
    expect($responseBody)->json()->hello->toBe('world');
});

it('can delete json', function (): void {
    $response = deleteJson('/json');

    expect($response->getStatusCode())->toEqual(StatusCode::STATUS_OK);
    $responseBody = (string) $response->getBody();
    expect($responseBody)->toBeJson();
    expect($responseBody)->json()->hello->toBe('world');
});

it('can options json', function (): void {
    $response = optionsJson('/json');

    expect($response->getStatusCode())->toEqual(StatusCode::STATUS_OK);
    $responseBody = (string) $response->getBody();
    expect($responseBody)->toBeJson();
    expect($responseBody)->json()->hello->toBe('world');
});
