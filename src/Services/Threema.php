<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

class Threema extends Service
{
    protected string $baseUrl = 'threema://compose';

    protected array $baseParameterMapping = [
        'url' => 'text',
    ];

    protected array $additionalParameters = [
        'id',
    ];
}
