<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

class Skype extends Service
{
    protected string $baseUrl = 'https://web.skype.com/share';

    protected array $baseParameterMapping = [
        'text' => 'text',
        'url' => 'url',
    ];
}
