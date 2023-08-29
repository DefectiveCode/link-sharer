<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

class Reddit extends Service
{
    protected string $baseUrl = 'https://www.reddit.com/submit';

    protected array $baseParameterMapping = [
        'text' => 'title',
        'url' => 'url',
    ];
}
