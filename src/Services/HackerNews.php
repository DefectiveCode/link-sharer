<?php

namespace DefectiveCode\LinkSharer\Services;

class HackerNews extends Service
{
    protected string $baseUrl = 'https://news.ycombinator.com/submitlink';

    protected array $baseParameterMapping = [
        'text' => 't',
        'url' => 'u',
    ];
}
