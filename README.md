# PHP Env Export
[![CircleCI](https://circleci.com/gh/djunehor/php-env-export.svg?style=svg)](https://circleci.com/gh/djunehor/php-env-export)
[![Latest Stable Version](https://poser.pugx.org/djunehor/php-env-export/v/stable)](https://packagist.org/packages/djunehor/php-env-export)
[![Total Downloads](https://poser.pugx.org/djunehor/php-env-export/downloads)](https://packagist.org/packages/djunehor/eyowo-php)
[![License](https://poser.pugx.org/djunehor/php-env-export/license)](https://packagist.org/packages/djunehor/php-env-export)
[![Build Status](https://scrutinizer-ci.com/g/djunehor/php-env-export/badges/build.png?b=master)](https://scrutinizer-ci.com/g/djunehor/php-env-export/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/djunehor/php-env-export/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/djunehor/php-env-export/?branch=master)

PHP Package to export env keys to new file

- [Laravel Bible](#php-env-export)
    - [Installation](#installation)
        - [Laravel 5.5 and above](#laravel-55-and-above)
        - [Laravel 5.4 and older](#laravel-54-and-older)
        - [Lumen](#lumen)
    - [Usage](#usage)
    - [Contributing](#contributing)

## Installation
You can install the package via composer:

```shell
composer require --dev djunehor/php-env-export
```

#### Laravel 5.5 and above

The package will automatically register itself, so you can start using it immediately.

#### Laravel 5.4 and older

In Laravel version 5.4 and older, you have to add the service provider in `config/app.php` file manually:

```php
'providers' => [
    // ...
    Djunehor\Env\EnvExportServiceProvider::class,
];
```
#### Lumen

After installing the package, you will have to register it in `bootstrap/app.php` file manually:
```php
// Register Service Providers
    // ...
    $app->register(Djunehor\Env\EnvExportServiceProvider::class);
];
```

## Usage
### via helper method
```php
$from = '.env'; //default value is .env
$to = '.env.example'; // default value is .env.example
export_env($from, $to);
```

### Via Laravel Artisan Command
- `php artisan env:export` uses default values
- Or `php artisan env:export --from=.env --to='.env.example`
- Or `php artisan env:export -f=.env -to='.env.example`

## Contributing
- Fork this project
- Clone to your repo
- Make your changes and run tests `composer test`
- Push and create a pull request
