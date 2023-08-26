<?php

namespace DefectiveCode\LinkSharer\Tests\Services;

use DefectiveCode\LinkSharer\Services\Skype;
use DefectiveCode\LinkSharer\Tests\TestCase;

class SkypeTest extends TestCase
{
    /** @test */
    public function itGeneratesAShareLink(): void
    {
        $service = new Skype([
            'text' => 'Share Me',
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'https://web.skype.com/share?text=Share%20Me&url=https%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
