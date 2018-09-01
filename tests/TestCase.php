<?php

namespace OhDear\LaravelOhDear\Tests;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use OhDear\LaravelOhDear\Facades\OhDear;
use OhDear\LaravelOhDear\OhDearServiceProvider;
use Spatie\Backup\BackupServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Spatie\BackupTool\BackupToolServiceProvider;

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
