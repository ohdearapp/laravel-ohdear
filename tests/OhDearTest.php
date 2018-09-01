<?php

namespace OhDear\LaravelOhDear\Tests;

use OhDear\PhpSdk\OhDear;
use OhDear\PhpSdk\Resources\Site;

class OhDearTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        config()->set('oh-dear', [
            'api_token' => 'dummy',
            'site_url' => 'https://my-site.com',
        ]);
    }

    /** @test */
    public function the_ohdear_class_is_bound()
    {
        $ohDear = app(OhDear::class);

        $this->assertInstanceOf(OhDear::class, $ohDear);

        $this->assertEquals('dummy', $ohDear->apiToken);
    }

    /** @test */
    public function the_facade_is_registered()
    {
        app()->bind(OhDear::class, function () {
            return new class() {
                public function sites()
                {
                    return 'sites';
                }
            };
        });

        $this->assertEquals('sites', \OhDear::sites());
    }
}
