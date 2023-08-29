<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

class Blogger extends Service
{
    protected string $baseUrl = 'https://www.blogger.com/blog-this.g';

    protected array $baseParameterMapping = [
        'text' => 'n',
        'url' => 'u',
    ];

    protected array $additionalParameters = [
        't',
    ];
}
