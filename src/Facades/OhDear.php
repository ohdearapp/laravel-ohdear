<?php

namespace OhDear\LaravelOhDear\Facades;

use Illuminate\Support\Facades\Facade;

class OhDear extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'oh-dear';
    }
}
