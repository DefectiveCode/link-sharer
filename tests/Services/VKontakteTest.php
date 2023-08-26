<?php

namespace DefectiveCode\LinkSharer\Tests\Services;

use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\VKontakte;

class VKontakteTest extends TestCase
{
    /** @test */
    public function itGeneratesAShareLink(): void
    {
        $service = new VKontakte([
            'description' => 'Description',
            'image' => 'https://www.defectivecode.com/image.png',
            'text' => 'Share Me',
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'https://vk.com/share.php?description=Description&image=https%3A%2F%2Fwww.defectivecode.com%2Fimage.png&title=Share%20Me&url=https%3A%2F%2Fwww.defectivecode.com&noparse=true',
            $service->generateLink()
        );
    }
}
