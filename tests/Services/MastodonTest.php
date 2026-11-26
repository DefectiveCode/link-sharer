<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests\Services;

use PHPUnit\Framework\Attributes\Test;
use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\Mastodon;

class MastodonTest extends TestCase
{
    #[Test]
    public function itGeneratesAShareLink(): void
    {
        $service = new Mastodon([
            'text' => 'Share Me',
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'https://share.joinmastodon.org/?text=Share%20Me%0Ahttps%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
