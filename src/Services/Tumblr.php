<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

class Tumblr extends Service
{
    protected string $baseUrl = 'https://www.tumblr.com/widgets/share/tool';

    protected array $baseParameterMapping = [
        'text' => 'title',
        'url' => 'canonicalUrl',
    ];

    protected array $additionalParameters = [
        'caption',
        'tags',
    ];
}
