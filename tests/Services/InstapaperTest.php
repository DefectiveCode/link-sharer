<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests\Services;

use PHPUnit\Framework\Attributes\Test;
use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\Instapaper;

class InstapaperTest extends TestCase
{
    #[Test]
    public function itGeneratesAShareLink(): void
    {
        $service = new Instapaper([
            'text' => 'Share Me',
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'https://www.instapaper.com/edit?title=Share%20Me&url=https%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
