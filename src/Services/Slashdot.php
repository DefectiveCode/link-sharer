<?php

namespace DefectiveCode\LinkSharer\Services;

class Slashdot extends Service
{
    protected string $baseUrl = 'https://slashdot.org/bookmark.pl';

    protected array $baseParameterMapping = [
        'text' => 'title',
        'url' => 'url',
    ];
}
