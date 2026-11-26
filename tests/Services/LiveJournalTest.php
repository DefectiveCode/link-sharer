<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests\Services;

use PHPUnit\Framework\Attributes\Test;
use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\LiveJournal;

class LiveJournalTest extends TestCase
{
    #[Test]
    public function itGeneratesAShareLink(): void
    {
        $service = new LiveJournal([
            'text' => 'Share Me',
            'url' => 'https://www.defectivecode.com',
        ]);

        $this->assertEquals(
            'https://www.livejournal.com/update.bml?subject=Share%20Me&event=https%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
