<?php

namespace Bluora\LaravelNumberConverter;

use Illuminate\Support\Facades\Facade;

class NumberConverterFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'NumberConverter';
    }
}
