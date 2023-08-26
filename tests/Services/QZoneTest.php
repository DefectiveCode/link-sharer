<?php

namespace DefectiveCode\LinkSharer\Tests\Services;

use DefectiveCode\LinkSharer\Services\QZone;
use DefectiveCode\LinkSharer\Tests\TestCase;

class QZoneTest extends TestCase
{
    /** @test */
    public function itGeneratesAShareLink(): void
    {
        $service = new QZone([
            'text' => 'Share Me',
            'summary' => 'Summary',
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?title=Share%20Me&summary=Summary&url=https%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
