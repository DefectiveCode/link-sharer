<?php

namespace DefectiveCode\LinkSharer\Services;

class Buffer extends Service
{
    protected string $baseUrl = 'https://buffer.com/add';

    protected array $baseParameterMapping = [
        'text' => 'title',
        'url' => 'url',
    ];
}
