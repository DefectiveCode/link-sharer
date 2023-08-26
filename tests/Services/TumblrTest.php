<?php

namespace DefectiveCode\LinkSharer\Tests\Services;

use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\Tumblr;

class TumblrTest extends TestCase
{
    /** @test */
    public function itGeneratesAShareLink(): void
    {
        $service = new Tumblr([
            'caption' => 'Caption',
            'tags' => 'red,blue',
            'text' => 'Share Me',
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'https://www.tumblr.com/widgets/share/tool?caption=Caption&tags=red%2Cblue&title=Share%20Me&canonicalUrl=https%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
