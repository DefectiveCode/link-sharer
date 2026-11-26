<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

use DefectiveCode\LinkSharer\Traits\AppendsLinks;

class Bluesky extends Service
{
    use AppendsLinks;

    protected string $baseUrl = 'https://bsky.app/intent/compose';

    protected array $baseParameterMapping = [
        'text' => 'text',
    ];
}
