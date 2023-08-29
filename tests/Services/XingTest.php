<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests\Services;

use DefectiveCode\LinkSharer\Services\Xing;
use DefectiveCode\LinkSharer\Tests\TestCase;

class XingTest extends TestCase
{
    /** @test */
    public function itGeneratesAShareLink(): void
    {
        $service = new Xing([
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'https://www.xing.com/spi/shares/new?url=https%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
