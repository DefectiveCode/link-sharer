<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

class Diaspora extends Service
{
    protected string $baseUrl = 'https://share.diasporafoundation.org';

    protected array $baseParameterMapping = [
        'text' => 'title',
        'url' => 'url',
    ];
}
