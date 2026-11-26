<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

class X extends Service
{
    protected string $baseUrl = 'https://x.com/intent/tweet';

    protected array $additionalParameters = [
        'hashtags',
        'via',
    ];
}
