<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Tests;

use InvalidArgumentException;
use DefectiveCode\LinkSharer\SharerFactory;
use DefectiveCode\LinkSharer\Services\Facebook;

class SharerFactoryTest extends TestCase
{
    /** @test */
    public function itResolvesAService(): void
    {
        $sharer = SharerFactory::make('facebook', []);

        $this->assertInstanceOf(Facebook::class, $sharer);
    }

    /** @test */
    public function itThrowsAnExceptionIfTheServiceDoesNotExist(): void
    {
        $this->expectException(InvalidArgumentException::class);

        SharerFactory::make('foo', []);
    }
}
