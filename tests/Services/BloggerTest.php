<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests\Services;

use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\Blogger;

class BloggerTest extends TestCase
{
    /** @test */
    public function itGeneratesAShareLink(): void
    {
        $service = new Blogger([
            'text' => 'SHARE ME',
            'url' => 'https://www.defectivecode.com',
            't' => 'red,blue',
        ]);

        $this->assertEquals(
            'https://www.blogger.com/blog-this.g?n=SHARE%20ME&u=https%3A%2F%2Fwww.defectivecode.com&t=red%2Cblue',
            $service->generateLink()
        );
    }
}
