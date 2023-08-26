<?php

namespace DefectiveCode\LinkSharer\Tests\Services;

use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\Outlook;

class OutlookTest extends TestCase
{
    /** @test */
    public function itGeneratesAShareLink(): void
    {
        $service = new Outlook([
            'text' => 'Share Me',
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'https://outlook.live.com/owa?body=Share%20Me%0Ahttps%3A%2F%2Fwww.defectivecode.com&path=%2Fmail%2Faction%2Fcompose',
            $service->generateLink()
        );
    }
}
