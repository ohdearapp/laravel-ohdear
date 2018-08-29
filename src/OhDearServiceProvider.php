<?php

namespace OhDear\LaravelOhDear;

use Illuminate\Support\ServiceProvider;
use OhDear\PhpSdk\OhDear;
use OhDear\PhpSdk\Resources\Site;

class OhDearServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/oh-dear.php' => config_path('oh-dear.php'),
            ], 'config');
        }

        $this->app->bind(OhDear::class, function() {
            $token = config('oh-dear.api_token');

            return new OhDear($token);
        });

        $this->app->bind(Site::class, function() {
            $siteUrl = config('oh-dear.site_url');

           return app(OhDear::class)->siteByUrl($siteUrl);
        });
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/oh-dear.php', 'oh-dear');
    }
}
