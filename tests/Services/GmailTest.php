<?php

namespace DefectiveCode\LinkSharer\Tests\Services;

use DefectiveCode\LinkSharer\Services\Gmail;
use DefectiveCode\LinkSharer\Tests\TestCase;

class GmailTest extends TestCase
{
    /** @test */
    public function itGeneratesAShareLink(): void
    {
        $service = new Gmail([
            'text' => 'Share Me',
            'url' => 'https://www.defectivecode.com',
            'bcc' => 'bcc@example.com',
            'cc' => 'cc@example.com',
            'su' => 'Subject',
            'to' => 'to@example.com',
        ]);

        $this->assertEquals(
            'https://mail.google.com/mail/u/0?body=Share%20Me%0Ahttps%3A%2F%2Fwww.defectivecode.com&bcc=bcc%40example.com&cc=cc%40example.com&su=Subject&to=to%40example.com&view=cm',
            $service->generateLink()
        );
    }
}
