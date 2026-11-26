<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests\Services;

use PHPUnit\Framework\Attributes\Test;
use DefectiveCode\LinkSharer\Tests\TestCase;
use DefectiveCode\LinkSharer\Services\Service;

class ServiceTest extends TestCase
{
    #[Test]
    public function itEncodesTheQueryParameters(): void
    {
        $service = new class(['text' => '&&&Share Me&&&', 'url' => 'https://www.defectivecode.com']) extends Service
        {
            protected string $baseUrl = 'https://www.defectivecode.com/share';
        };

        $this->assertEquals(
            'https://www.defectivecode.com/share?text=%26%26%26Share%20Me%26%26%26&url=https%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }

    #[Test]
    public function itRemovesEmptyParameters(): void
    {
        $service = new class(['text' => 'Share Me']) extends Service
        {
            protected string $baseUrl = 'https://www.defectivecode.com/share';

            protected array $additionalParameters = [
                't',
            ];
        };

        $this->assertEquals(
            'https://www.defectivecode.com/share?text=Share%20Me',
            $service->generateLink()
        );
    }

    #[Test]
    public function itAppendsTheDefaultParameters(): void
    {
        $service = new class(['text' => 'Share Me', 'url' => 'https://www.defectivecode.com']) extends Service
        {
            protected string $baseUrl = 'https://www.defectivecode.com/share';

            protected array $defaultParameters = [
                't' => 'default',
            ];
        };

        $this->assertEquals(
            'https://www.defectivecode.com/share?text=Share%20Me&url=https%3A%2F%2Fwww.defectivecode.com&t=default',
            $service->generateLink()
        );
    }

    #[Test]
    public function itMapsTheBaseParameters(): void
    {
        $service = new class(['text' => 'Share Me', 'url' => 'https://www.defectivecode.com']) extends Service
        {
            protected string $baseUrl = 'https://www.defectivecode.com/share';

            protected array $baseParameterMapping = [
                'text' => 't',
                'url' => 'u',
            ];
        };

        $this->assertEquals(
            'https://www.defectivecode.com/share?t=Share%20Me&u=https%3A%2F%2Fwww.defectivecode.com',
            $service->generateLink()
        );
    }
}
