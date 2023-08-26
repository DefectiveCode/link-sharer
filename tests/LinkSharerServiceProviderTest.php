<?php

namespace DefectiveCode\LinkSharer\Tests;

use DefectiveCode\LinkSharer\LinkSharerServiceProvider;

class LinkSharerServiceProviderTest extends TestCase
{
    /** @test */
    public function itRegistersTheBladeComponent(): void
    {
        (new LinkSharerServiceProvider($this->app))->boot();

        $this->assertArrayHasKey('link-sharer', $this->app->make('blade.compiler')->getClassComponentAliases());
    }
}
