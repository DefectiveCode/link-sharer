<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

use DefectiveCode\LinkSharer\Traits\AppendsLinks;

class Outlook extends Service
{
    use AppendsLinks;

    protected string $baseUrl = 'https://outlook.live.com/owa';

    protected array $baseParameterMapping = [
        'text' => 'body',
    ];

    protected array $defaultParameters = [
        'path' => '/mail/action/compose',
    ];
}
