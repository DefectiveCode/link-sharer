<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests\Services;

use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\RenRen;

class RenRenTest extends TestCase
{
    /** @test */
    public function itGeneratesAShareLink(): void
    {
        $service = new RenRen([
            'description' => 'Description',
            'srcUrl' => 'https://www.defectivecode.com',
            'text' => 'Share Me',
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'http://widget.renren.com/dialog/share?description=Description&srcUrl=https%3A%2F%2Fwww.defectivecode.com&title=Share%20Me&resourceUrl=https%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
