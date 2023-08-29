<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

class LiveJournal extends Service
{
    protected string $baseUrl = 'https://www.livejournal.com/update.bml';

    protected array $baseParameterMapping = [
        'text' => 'subject',
        'url' => 'event',
    ];
}
