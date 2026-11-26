<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests\Services;

use PHPUnit\Framework\Attributes\Test;
use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\Threads;

class ThreadsTest extends TestCase
{
    #[Test]
    public function itGeneratesAShareLink(): void
    {
        $service = new Threads([
            'quote_post_shortcode' => 'DPgzLZcAJPr',
            'reply_control' => 'followers_only',
            'reply_post_shortcode' => 'DRM8DF9AGUc',
            'tag' => 'Laravel',
            'text' => 'Share Me',
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'https://www.threads.com/intent/post?quote_post_shortcode=DPgzLZcAJPr&reply_control=followers_only&reply_post_shortcode=DRM8DF9AGUc&tag=Laravel&text=Share%20Me&url=https%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
