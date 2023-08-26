<?php

namespace DefectiveCode\LinkSharer\Tests\Services;

use DefectiveCode\LinkSharer\Services\Weibo;
use DefectiveCode\LinkSharer\Tests\TestCase;

class WeiboTest extends TestCase
{
    /** @test */
    public function itGeneratesAShareLink(): void
    {
        $service = new Weibo([
            'text' => 'Share Me',
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'https://service.weibo.com/share/share.php?title=Share%20Me&url=https%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
