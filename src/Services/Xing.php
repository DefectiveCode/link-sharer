<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

class Xing extends Service
{
    protected string $baseUrl = 'https://www.xing.com/spi/shares/new';

    protected array $baseParameterMapping = [
        'url' => 'url',
    ];
}
