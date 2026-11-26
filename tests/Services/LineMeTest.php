<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests\Services;

use PHPUnit\Framework\Attributes\Test;
use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\LineMe;

class LineMeTest extends TestCase
{
    #[Test]
    public function itGeneratesAShareLink(): void
    {
        $service = new LineMe([
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'https://social-plugins.line.me/lineit/share?url=https%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
