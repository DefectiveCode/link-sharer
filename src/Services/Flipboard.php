<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

class Flipboard extends Service
{
    protected string $baseUrl = 'https://share.flipboard.com/bookmarklet/popout';

    protected array $baseParameterMapping = [
        'text' => 'title',
        'url' => 'url',
    ];
}
