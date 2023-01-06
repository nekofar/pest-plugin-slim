# The Pest Slim Plugin

[![Packagist Version][icon-packagist]][link-packagist]
[![PHP from Packagist][icon-php-version]][link-packagist]
[![Packagist Downloads][icon-downloads]][link-packagist]
[![Tests Status][icon-workflow]][link-workflow]
[![Coverage Status][icon-coverage]][link-coverage]
[![License][icon-license]][link-license]
[![Twitter: nekofar][icon-twitter]][link-twitter]

> This package is a plugin for [Pest PHP](https://pestphp.com).
The Slim Plugin for Pest gives your basic functionality for testing your API's built by Slim.

## Installation

To get started, install the plugin using composer:

```bash
composer require nekofar/pest-plugin-slim --dev
```


Requires Slim Framework 4 and PHP 8.0 or newer.

## Usage

```php
use function Nekofar\Slim\Pest\get;

beforeEach(function (): void {
    $app = require __DIR__ . '/../config/bootstrap.php';
        
    $this->setUpApp($app);
})
            
it('can see home page', function (): void {
    get('/')
        ->assertOk()
        ->assertSee('Welcome');
});
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

---
[icon-packagist]: https://img.shields.io/packagist/v/nekofar/pest-plugin-slim.svg
[icon-php-version]: https://img.shields.io/packagist/php-v/nekofar/pest-plugin-slim.svg
[icon-twitter]: https://img.shields.io/twitter/follow/nekofar.svg?style=flat
[icon-coverage]: https://codecov.io/gh/nekofar/pest-plugin-slim/graph/badge.svg
[icon-license]: https://img.shields.io/github/license/nekofar/pest-plugin-slim.svg
[icon-workflow]: https://img.shields.io/github/actions/workflow/status/nekofar/pest-plugin-slim/tests.yml
[icon-downloads]: https://img.shields.io/packagist/dt/nekofar/pest-plugin-slim

[link-packagist]: https://packagist.org/packages/nekofar/pest-plugin-slim
[link-twitter]: https://twitter.com/nekofar
[link-coverage]: https://codecov.io/gh/nekofar/pest-plugin-slim
[link-license]: https://github.com/nekofar/pest-plugin-slim/blob/master/LICENSE.md
[link-workflow]: https://github.com/nekofar/pest-plugin-slim/actions/workflows/tests.yml
