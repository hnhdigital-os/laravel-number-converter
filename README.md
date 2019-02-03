# Laravel Number Converter

This package provides a Laravel wrapper to the [PHP-Number-Converter](https://github.com/hnhdigital-os/php-number-converter) package that provides the ability to convert a numerical number to a word, roman numeral, or an ordinal suffix.

[![Latest Stable Version](https://poser.pugx.org/hnhdigital-os/laravel-number-converter/v/stable.svg)](https://packagist.org/packages/hnhdigital-os/laravel-number-converter) [![Total Downloads](https://poser.pugx.org/hnhdigital-os/laravel-number-converter/downloads.svg)](https://packagist.org/packages/hnhdigital-os/laravel-number-converter) [![Latest Unstable Version](https://poser.pugx.org/hnhdigital-os/laravel-number-converter/v/unstable.svg)](https://packagist.org/packages/hnhdigital-os/laravel-number-converter) [![Built for Laravel](https://img.shields.io/badge/Built_for-Laravel-green.svg)](https://laravel.com/)  [![License](https://poser.pugx.org/hnhdigital-os/laravel-number-converter/license.svg)](https://packagist.org/packages/hnhdigital-os/laravel-number-converter) [![Donate to this project using Patreon](https://img.shields.io/badge/patreon-donate-yellow.svg)](https://patreon.com/RoccoHoward)

[![StyleCI](https://styleci.io/repos/74523556/shield?branch=master)](https://styleci.io/repos/74523556)[![Issue Count](https://codeclimate.com/github/hnhdigital-os/laravel-number-converter/badges/issue_count.svg)](https://codeclimate.com/github/hnhdigital-os/laravel-number-converter) [![Code Climate](https://codeclimate.com/github/hnhdigital-os/laravel-number-converter/badges/gpa.svg)](https://codeclimate.com/github/hnhdigital-os/laravel-number-converter)

This package has been developed by H&H|Digital, an Australian botique developer. Visit us at [hnh.digital](http://hnh.digital).

## Install

Via composer:

`$ composer require hnhdigital-os/laravel-number-converter`

Enable an alias by editing config/app.php:

```php
'aliases' => array(
    ...
    'NumConvert' => 'HnhDigital\LaravelNumberConverter\NumberConverterFacade',
    ...
)
```

This package autoloads.

Enable the service provider (pre Laravel 5.5) by editing config/app.php:

```php
'providers' => array(
    ...
    'LaravelNumberConverter\NumberConverterServiceProvider',
    ...
)
```


### Convert to word

Supported number range -2147483647 to 2147483647.

```php
echo NumConvert::word(122);
```

### Convert to roman

Supported number range 1 to 3999.

```php
echo NumConvert::roman(122);
```

### Ordinal suffix

Supported number range 1 to 2147483647.

```php
echo NumConvert::ordinal(122);
```

## Contributing

Please see [CONTRIBUTING](https://github.com/hnhdigital-os/laravel-number-converter/blob/master/CONTRIBUTING.md) for details.

## Credits

* [Rocco Howard](https://github.com/therocis)
* [All Contributors](https://github.com/hnhdigital-os/laravel-number-converter/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/hnhdigital-os/laravel-number-converter/blob/master/LICENSE) for more information.
