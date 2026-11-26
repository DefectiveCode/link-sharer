<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests\Services;

use PHPUnit\Framework\Attributes\Test;
use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\Threema;

class ThreemaTest extends TestCase
{
    #[Test]
    public function itGeneratesAShareLink(): void
    {
        $service = new Threema([
            'id' => 'ABCD1234',
            'text' => 'Share Me',
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'threema://compose?id=ABCD1234&text=https%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
