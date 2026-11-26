<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

use DefectiveCode\LinkSharer\Traits\AppendsLinks;

class Viber extends Service
{
    use AppendsLinks;

    protected string $baseUrl = 'viber://forward';

    protected array $baseParameterMapping = [
        'text' => 'text',
    ];
}
