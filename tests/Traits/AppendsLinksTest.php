<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests\Traits;

use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\Service;
use DefectiveCode\LinkSharer\Traits\AppendsLinks;

class AppendsLinksTest extends TestCase
{
    /** @test */
    public function itAppendsALinkToTheText(): void
    {
        $service = new class(['text' => 'text', 'url' => 'https://www.defectivecode.com']) extends Service
        {
            use AppendsLinks;

            protected string $baseUrl = 'https://www.defectivecode.com/share';

            protected array $baseParameterMapping = [
                'text' => 'text',
            ];
        };

        $this->assertEquals(
            'https://www.defectivecode.com/share?text=text%0Ahttps%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
