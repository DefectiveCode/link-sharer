<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests\Services;

use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\Whatsapp;

class WhatsappTest extends TestCase
{
    /** @test */
    public function itGeneratesAShareLink(): void
    {
        $service = new Whatsapp([
            'text' => 'Share Me',
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'https://wa.me?text=Share%20Me%0Ahttps%3A%2F%2Fwww.defectivecode.com&url=https%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
