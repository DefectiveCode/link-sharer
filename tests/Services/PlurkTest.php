<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests\Services;

use PHPUnit\Framework\Attributes\Test;
use DefectiveCode\LinkSharer\Services\Plurk;
use DefectiveCode\LinkSharer\Tests\TestCase;

class PlurkTest extends TestCase
{
    #[Test]
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
