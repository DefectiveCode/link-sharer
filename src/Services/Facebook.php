<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

class Facebook extends Service
{
    protected string $baseUrl = 'https://www.facebook.com/sharer/sharer.php';

    protected array $baseParameterMapping = [
        'url' => 'u',
    ];
}
