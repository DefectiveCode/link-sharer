<?php

namespace DefectiveCode\LinkSharer\Services;

class Viber extends Service
{
    protected string $baseUrl = 'viber://forward';

    protected array $baseParameterMapping = [
        'text' => 'title',
        'url' => 'url',
    ];
}
