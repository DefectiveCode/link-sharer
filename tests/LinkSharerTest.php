<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests;

use PHPUnit\Framework\Attributes\Test;
use DefectiveCode\LinkSharer\LinkSharer;
use Illuminate\View\ComponentAttributeBag;

class LinkSharerTest extends TestCase
{
    #[Test]
    public function itReturnsAnAnchorTag(): void
    {
        $sharer = new LinkSharer('facebook');

        $link = $sharer->render()($this->componentData($sharer));

        $this->assertEquals(
            '<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.defectivecode.com" target="_blank" class="">Shared Me!</a>',
            $link
        );
    }

    #[Test]
    public function itChangesTheAnchorTagTarget(): void
    {
        $sharer = new LinkSharer('facebook', '', '_self');

        $link = $sharer->render()($this->componentData($sharer));

        $this->assertEquals(
            '<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.defectivecode.com" target="_self" class="">Shared Me!</a>',
            $link
        );
    }

    #[Test]
    public function itAddsTheClassesToTheParentAnchorTag(): void
    {
        $sharer = new LinkSharer('facebook', 'text-red text-bold');

        $link = $sharer->render()($this->componentData($sharer));

        $this->assertEquals(
            '<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.defectivecode.com" target="_blank" class="text-red text-bold">Shared Me!</a>',
            $link
        );
    }

    /** @return array{service: string, slot: string, attributes: ComponentAttributeBag} */
    protected function componentData(LinkSharer $sharer): array
    {
        return [
            'service' => $sharer->service,
            'slot' => 'Shared Me!',
            'attributes' => new ComponentAttributeBag([
                'url' => 'https://www.defectivecode.com',
            ]),
        ];
    }
}
