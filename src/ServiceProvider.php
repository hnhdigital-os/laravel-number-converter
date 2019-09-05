<?php

namespace HnhDigital\LaravelNumberConverter;

use HnhDigital\PhpNumberConverter\NumberConverter;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('NumConvert', function () {
            return new NumberConverter();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['NumConvert'];
    }

    /**
     * Boot and add helpers if enabled.
     *
     * @return void
     */
    public function boot()
    {
        if (!config('hnhdigital.number-converter.helpers', false)) {
            return;
        }

        include_once 'helpers.php';
    }
}
