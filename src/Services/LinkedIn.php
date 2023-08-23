<?php

namespace DefectiveCode\LinkSharer\Services;

class LinkedIn extends Service
{
    protected string $baseUrl = 'https://www.linkedin.com/shareArticle';

    protected array $baseParameterMapping = [
        'url' => 'url',
    ];
}
