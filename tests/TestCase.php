<?php

namespace OhDear\LaravelOhDear\Tests;

use OhDear\LaravelOhDear\Facades\OhDear;
use Orchestra\Testbench\TestCase as Orchestra;
use OhDear\LaravelOhDear\OhDearServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            OhDearServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'OhDear' => OhDear::class,
        ];
    }
}
