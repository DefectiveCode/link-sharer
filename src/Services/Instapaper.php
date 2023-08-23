<?php

namespace DefectiveCode\LinkSharer\Services;

class Instapaper extends Service
{
    protected string $baseUrl = 'https://www.instapaper.com/edit';

    protected array $baseParameterMapping = [
        'text' => 'title',
        'url' => 'url',
    ];

    protected array $additionalParameters = [
        'description',
    ];
}
