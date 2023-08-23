<?php

namespace DefectiveCode\LinkSharer\Services;

class Line extends Service
{
    protected string $baseUrl = 'https://social-plugins.line.me/lineit/share';

    protected array $baseParameterMapping = [
        'url' => 'url',
    ];
}
