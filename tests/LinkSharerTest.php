<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests;

use Illuminate\Support\Facades\Blade;
use PHPUnit\Framework\Attributes\Test;
use DefectiveCode\LinkSharer\LinkSharerServiceProvider;

class LinkSharerTest extends TestCase
{
    #[Test]
    public function itReturnsAnAnchorTag(): void
    {
        $link = Blade::render('<x-link-sharer service="facebook" url="https://www.defectivecode.com">Shared Me!</x-link-sharer>');

        $this->assertEquals(
            '<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.defectivecode.com" target="_blank" class="">Shared Me!</a>',
            $link
        );
    }

    #[Test]
    public function itChangesTheAnchorTagTarget(): void
    {
        $link = Blade::render('<x-link-sharer service="facebook" target="_self" url="https://www.defectivecode.com">Shared Me!</x-link-sharer>');

        $this->assertEquals(
            '<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.defectivecode.com" target="_self" class="">Shared Me!</a>',
            $link
        );
    }

    #[Test]
    public function itAddsTheClassesToTheParentAnchorTag(): void
    {
        $link = Blade::render('<x-link-sharer service="facebook" class="text-red text-bold" url="https://www.defectivecode.com">Shared Me!</x-link-sharer>');

        $this->assertEquals(
            '<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.defectivecode.com" target="_blank" class="text-red text-bold">Shared Me!</a>',
            $link
        );
    }

    #[Test]
    public function itAcceptsBoundAttributesAndAnHtmlSlot(): void
    {
        $link = Blade::render(
            '<x-link-sharer service="twitter" :text="$text" url="https://www.defectivecode.com"><span>{{ $label }}</span></x-link-sharer>',
            ['text' => 123, 'label' => 'Shared Me!']
        );

        $this->assertEquals(
            '<a href="https://twitter.com/intent/tweet?text=123&url=https%3A%2F%2Fwww.defectivecode.com" target="_blank" class=""><span>Shared Me!</span></a>',
            $link
        );
    }

    protected function getPackageProviders($app): array
    {
        return [LinkSharerServiceProvider::class];
    }
}
