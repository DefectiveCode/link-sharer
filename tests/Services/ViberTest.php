<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests\Services;

use PHPUnit\Framework\Attributes\Test;
use DefectiveCode\LinkSharer\Services\Viber;
use DefectiveCode\LinkSharer\Tests\TestCase;

class ViberTest extends TestCase
{
    #[Test]
    public function itGeneratesAShareLink(): void
    {
        $service = new Viber([
            'text' => 'Share Me',
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'viber://forward?text=Share%20Me%0Ahttps%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
