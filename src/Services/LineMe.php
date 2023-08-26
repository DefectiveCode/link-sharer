<?php

namespace DefectiveCode\LinkSharer\Services;

class LineMe extends Service
{
    protected string $baseUrl = 'https://social-plugins.line.me/lineit/share';

    protected array $baseParameterMapping = [
        'url' => 'url',
    ];
}
