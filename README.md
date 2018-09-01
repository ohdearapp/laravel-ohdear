# Easily integrate the Oh Dear API into a Laravel app

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ohdearapp/laravel-ohdear.svg?style=flat-square)](https://packagist.org/packages/ohdearapp/laravel-ohdear)
[![Build Status](https://img.shields.io/travis/ohdearapp/laravel-ohdear/master.svg?style=flat-square)](https://travis-ci.org/ohdearapp/laravel-ohdear)
[![Quality Score](https://img.shields.io/scrutinizer/g/ohdearapp/laravel-ohdear.svg?style=flat-square)](https://scrutinizer-ci.com/g/ohdearapp/laravel-ohdear)
[![Total Downloads](https://img.shields.io/packagist/dt/ohdearapp/laravel-ohdear.svg?style=flat-square)](https://packagist.org/packages/ohdearapp/laravel-ohdear)

This package makes it easy to work with [the Oh Dear! sdk]((https://github.com/ohdearapp/ohdear-php-sdk)) in a Laravel app. Once configured you can call all the sdk methods on the `OhDear` facade

```php
\OhDear::sites(); // gets all sites
```

Also, the `OhDear\PhpSdk\Resources\Site` will be bound to the site which url matches the one specified in the `site_url` value of the `oh-dear` config file.

## Installation

You can install the package via composer:

```bash
composer require ohdearapp/laravel-ohdear
```

Next you must publish the config file. This is the content that will be published to `config/oh-dear.php`:

```php
return [

    /*
     * A valid API token for your Oh Dear! account. Instructions on how to get a
     * token can be found on this page: https://ohdear.app/docs/api/authentication
     */
    'api_token' => env('OH_DEAR_API_TOKEN', ''),

    /*
     * The url of your site as shown in Oh Dear.
     * It should start with either 'http' or 'https'.
     */
    'site_url' => env('OH_DEAR_SITE_URL', ''),
];
```

## Usage

You can call all the sdk methods on the `OhDear` facade:

```php
\OhDear::sites(); // gets all sites
```

Take a look at [the documentation of our php sdk](https://github.com/ohdearapp/ohdear-php-sdk) to learn which methods are available.

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
