<?php

namespace DefectiveCode\LinkSharer\Tests\Services;

use DefectiveCode\LinkSharer\Services\Okru;
use DefectiveCode\LinkSharer\Tests\TestCase;

class OkruTest extends TestCase
{
    /** @test */
    public function itGeneratesAShareLink(): void
    {
        $service = new Okru([
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'https://connect.ok.ru/dk?st.shareUrl=https%3A%2F%2Fwww.defectivecode.com&st.cmd=WidgetSharePreview',
            $service->generateLink()
        );
    }
}
