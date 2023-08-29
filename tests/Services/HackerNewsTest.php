<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests\Services;

use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\HackerNews;

class HackerNewsTest extends TestCase
{
    /** @test */
    public function itGeneratesAShareLink(): void
    {
        $service = new HackerNews([
            'text' => 'Share Me',
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'https://news.ycombinator.com/submitlink?t=Share%20Me&u=https%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
