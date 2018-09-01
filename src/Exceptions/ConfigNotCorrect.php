<?php

namespace OhDear\LaravelOhDear\Exceptions;

use Exception;

class ConfigNotCorrect extends Exception
{
    public static function apiTokenMissing(): Exception
    {
        return new static('You should specify an `api_token` in the `oh-dear` config file');
    }

    public static function siteUrlMissing()
    {
        return new static('You should specify a `site_url` in the `oh-dear` config file');
    }
}
