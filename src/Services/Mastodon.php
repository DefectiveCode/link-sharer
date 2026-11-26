<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

use DefectiveCode\LinkSharer\Traits\AppendsLinks;

class Mastodon extends Service
{
    use AppendsLinks;

    protected string $baseUrl = 'https://share.joinmastodon.org/';

    protected array $baseParameterMapping = [
        'text' => 'text',
    ];
}
