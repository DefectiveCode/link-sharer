<?php

namespace DefectiveCode\LinkSharer\Tests\Services;

use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\Douban;

class DoubanTest extends TestCase
{
    /** @test */
    public function itGeneratesAShareLink(): void
    {
        $service = new Douban([
            'comment' => 'My Comment',
            'text' => 'Share Me',
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'https://www.douban.com/share/service?comment=My%20Comment&name=Share%20Me&href=https%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
