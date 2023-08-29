<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests\Services;

use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\Twitter;

class TwitterTest extends TestCase
{
    /** @test */
    public function itGeneratesAShareLink(): void
    {
        $service = new Twitter([
            'hashtags' => 'red,blue',
            'text' => 'Share Me',
            'url' => 'https://www.defectivecode.com',
            'via' => 'defectivecode',
        ]);

        $this->assertEquals(
            'https://twitter.com/intent/tweet?hashtags=red%2Cblue&text=Share%20Me&url=https%3A%2F%2Fwww.defectivecode.com&via=defectivecode',
            $service->generateLink()
        );
    }
}
