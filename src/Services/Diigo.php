<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

class Diigo extends Service
{
    protected string $baseUrl = 'https://www.diigo.com/post';

    protected array $baseParameterMapping = [
        'text' => 'title',
        'url' => 'url',
    ];

    protected array $additionalParameters = [
        'description',
    ];
}
