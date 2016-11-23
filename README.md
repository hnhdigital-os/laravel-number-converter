# Laravel Number Converter

This package has been developed by H&H|Digital, an Australian botique developer. Visit us at [hnh.digital](http://hnh.digital).

[![Latest Stable Version](https://poser.pugx.org/bluora/laravel-number-converter/v/stable.svg)](https://packagist.org/packages/bluora/laravel-number-converter) [![Total Downloads](https://poser.pugx.org/bluora/laravel-number-converter/downloads.svg)](https://packagist.org/packages/bluora/laravel-number-converter) [![Latest Unstable Version](https://poser.pugx.org/bluora/laravel-number-converter/v/unstable.svg)](https://packagist.org/packages/bluora/laravel-number-converter) [![License](https://poser.pugx.org/bluora/laravel-number-converter/license.svg)](https://packagist.org/packages/bluora/laravel-number-converter)

[![Build Status](https://travis-ci.org/bluora/laravel-number-converter.svg?branch=master)](https://travis-ci.org/bluora/laravel-number-converter) [![StyleCI](https://styleci.io/repos/x/shield?branch=master)](https://styleci.io/repos/x) [![Test Coverage](https://codeclimate.com/github/bluora/laravel-number-converter/badges/coverage.svg)](https://codeclimate.com/github/bluora/laravel-number-converter/coverage) [![Issue Count](https://codeclimate.com/github/bluora/laravel-number-converter/badges/issue_count.svg)](https://codeclimate.com/github/bluora/laravel-number-converter) [![Code Climate](https://codeclimate.com/github/bluora/laravel-number-converter/badges/gpa.svg)](https://codeclimate.com/github/bluora/laravel-number-converter)

## Install

Via composer:

`$ composer require bluora/laravel-number-converter dev-master`

Enable the service provider by editing config/app.php:

```php
'providers' => array(
    ...
    'LaravelNumberConverter\NumberConverterServiceProvider',
    ...
)
```

Enable an alias by editing config/app.php:

```php
'aliases' => array(
    ...
    'NumConvert' => 'Bluora\LaravelNumberConverter\NumberConverterFacade',
    ...
)
```


### Convert to word

Supported number range -2147483647 to 2147483647.

```php
echo NumConvert::convert(122, 'W');
```

### Convert to roman

Supported number range 1 to 3999.

```php
echo NumConvert::convert(122, 'R');
```

### Ordinal suffix

Supported number range 1 to 2147483647.

```php
echo NumConvert::convert(122, 'O');
```

## Contributing

Please see [CONTRIBUTING](https://github.com/bluora/laravel-number-converter/blob/master/CONTRIBUTING.md) for details.

## Credits

* Forked from [saintkabyo/number-converter](https://github.com/saintkabyo/number-converter)
* [Rocco Howard](https://github.com/therocis)
* [All Contributors](https://github.com/bluora/laravel-number-converter/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/bluora/laravel-number-converter/blob/master/LICENSE) for more information.
