<?php

namespace DefectiveCode\LinkSharer\Services;

class ScoopIt extends Service
{
    protected string $baseUrl = 'https://www.scoop.it/bookmarklet';

    protected array $baseParameterMapping = [
        'text' => 'title',
        'url' => 'url',
    ];

    protected array $additionalParameters = [
        'note',
    ];
}
