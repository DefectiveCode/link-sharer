<?php

namespace DefectiveCode\LinkSharer\Tests\Services;

use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\LinkedIn;

class LinkedInTest extends TestCase
{
    /** @test */
    public function itGeneratesAShareLink(): void
    {
        $service = new LinkedIn([
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'https://www.linkedin.com/shareArticle?url=https%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
