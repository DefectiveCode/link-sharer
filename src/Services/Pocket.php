<?php

namespace DefectiveCode\LinkSharer\Services;

class Pocket extends Service
{
    protected string $baseUrl = 'https://getpocket.com/save';

    protected array $baseParameterMapping = [
        'text' => 'title',
        'url' => 'url',
    ];
}
