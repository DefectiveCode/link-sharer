<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests;

use Illuminate\Support\Facades\Blade;
use PHPUnit\Framework\Attributes\Test;
use DefectiveCode\LinkSharer\LinkSharerServiceProvider;

class LinkSharerServiceProviderTest extends TestCase
{
    #[Test]
    public function itRegistersTheBladeComponent(): void
    {
        (new LinkSharerServiceProvider(app()))->boot();

        $this->assertArrayHasKey('link-sharer', Blade::getClassComponentAliases());
    }
}
