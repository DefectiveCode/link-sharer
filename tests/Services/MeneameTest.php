<?php

namespace DefectiveCode\LinkSharer\Tests\Services;

use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\Meneame;

class MeneameTest extends TestCase
{
    /** @test */
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
