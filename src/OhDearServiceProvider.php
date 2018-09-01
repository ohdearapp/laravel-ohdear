<?php

namespace OhDear\LaravelOhDear;

use OhDear\PhpSdk\OhDear;
use OhDear\PhpSdk\Resources\Site;
use Illuminate\Support\ServiceProvider;
use OhDear\LaravelOhDear\Exceptions\ConfigNotCorrect;

class OhDearServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/oh-dear.php' => config_path('oh-dear.php'),
            ], 'config');
        }

        $this->app->singleton(OhDear::class, function () {
            $token = config('oh-dear.api_token');

            if (! $token) {
                dump('here');
                throw ConfigNotCorrect::apiTokenMissing();
            }

            return new OhDear($token);
        });

        $this->app->alias(OhDear::class, 'oh-dear');

        $this->app->bind(Site::class, function () {
            if (! $siteUrl = config('oh-dear.site_url')) {
                throw ConfigNotCorrect::siteUrlMissing();
            }

            return app(OhDear::class)->siteByUrl($siteUrl);
        });
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/oh-dear.php', 'oh-dear');
    }
}
