<?php

namespace DefectiveCode\LinkSharer\Services;

class Twitter extends Service
{
    protected string $baseUrl = 'https://twitter.com/intent/tweet';

    protected array $additionalParameters = [
        'hashtags',
        'via',
    ];
}
