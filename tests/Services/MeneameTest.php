<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests\Services;

use PHPUnit\Framework\Attributes\Test;
use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\Meneame;

class MeneameTest extends TestCase
{
    #[Test]
    public function itGeneratesAShareLink(): void
    {
        $service = new Meneame([
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'https://www.meneame.net/submit.php?url=https%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
