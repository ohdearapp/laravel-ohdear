<?php

namespace OhDear\LaravelOhDear\Facades;

use Illuminate\Support\Facades\Facade;

class OhDear extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'oh-dear';
    }
}
