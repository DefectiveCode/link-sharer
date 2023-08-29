<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests\Services;

use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\Facebook;

class FacebookTest extends TestCase
{
    /** @test */
    public function itGeneratesAShareLink(): void
    {
        $service = new Facebook([
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
