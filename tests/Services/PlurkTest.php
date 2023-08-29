<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests\Services;

use DefectiveCode\LinkSharer\Services\Plurk;
use DefectiveCode\LinkSharer\Tests\TestCase;

class PlurkTest extends TestCase
{
    /** @test */
    public function itGeneratesAShareLink(): void
    {
        $service = new Plurk([
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'https://www.plurk.com/m?status=https%3A%2F%2Fwww.defectivecode.com&qualifier=shares',
            $service->generateLink()
        );
    }
}
