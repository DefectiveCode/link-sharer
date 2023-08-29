<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests;

use DefectiveCode\LinkSharer\LinkSharer;

class LinkSharerTest extends TestCase
{
    /** @test */
    public function itReturnsAnAnchorTag(): void
    {
        $sharer = new LinkSharer('facebook');

        $link = $sharer->render()($this->componentData($sharer->data()));

        $this->assertEquals(
            '<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.defectivecode.com" target="_blank" class="">Shared Me!</a>',
            $link
        );
    }

    /** @test */
    public function itChangesTheAnchorTagTarget(): void
    {
        $sharer = new LinkSharer('facebook', '', '_self');

        $link = $sharer->render()($this->componentData($sharer->data()));

        $this->assertEquals(
            '<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.defectivecode.com" target="_self" class="">Shared Me!</a>',
            $link
        );
    }

    /** @test */
    public function itAddsTheClassesToTheParentAnchorTag(): void
    {
        $sharer = new LinkSharer('facebook', 'text-red text-bold');

        $link = $sharer->render()($this->componentData($sharer->data()));

        $this->assertEquals(
            '<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.defectivecode.com" target="_blank" class="text-red text-bold">Shared Me!</a>',
            $link
        );
    }

    protected function componentData(array $baseData): array
    {
        $baseData['slot'] = 'Shared Me!';
        $baseData['attributes']->setAttributes([
            'url' => 'https://www.defectivecode.com',
        ]);

        return $baseData;
    }
}
