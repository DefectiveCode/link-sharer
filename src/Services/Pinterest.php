<?php

namespace DefectiveCode\LinkSharer\Services;

class Pinterest extends Service
{
    protected string $baseUrl = 'https://pinterest.com/pin/create/button';

    protected array $baseParameterMapping = [
        'text' => 'description',
        'url' => 'url',
    ];

    protected array $additionalParameters = [
        'media',
    ];
}
