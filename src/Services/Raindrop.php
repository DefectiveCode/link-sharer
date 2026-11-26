<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

class Raindrop extends Service
{
    protected string $baseUrl = 'https://app.raindrop.io/add';

    protected array $baseParameterMapping = [
        'text' => 'title',
        'url' => 'link',
    ];
}
