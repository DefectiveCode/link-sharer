<?php

namespace DefectiveCode\LinkSharer\Tests\Services;

use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\YahooMail;

class YahooMailTest extends TestCase
{
    /** @test */
    public function itGeneratesAShareLink(): void
    {
        $service = new YahooMail([
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'https://compose.mail.yahoo.com?body=https%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
