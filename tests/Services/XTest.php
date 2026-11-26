<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests\Services;

use PHPUnit\Framework\Attributes\Test;
use DefectiveCode\LinkSharer\Services\X;
use DefectiveCode\LinkSharer\Tests\TestCase;

class XTest extends TestCase
{
    #[Test]
    public function itGeneratesAShareLink(): void
    {
        $service = new X([
            'hashtags' => 'red,blue',
            'text' => 'Share Me',
            'url' => 'https://www.defectivecode.com',
            'via' => 'defectivecode',
        ]);

        $this->assertEquals(
            'https://x.com/intent/tweet?hashtags=red%2Cblue&text=Share%20Me&url=https%3A%2F%2Fwww.defectivecode.com&via=defectivecode',
            $service->generateLink()
        );
    }
}
