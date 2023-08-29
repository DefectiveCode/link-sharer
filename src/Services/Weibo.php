<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

class Weibo extends Service
{
    protected string $baseUrl = 'https://service.weibo.com/share/share.php';

    protected array $baseParameterMapping = [
        'text' => 'title',
        'url' => 'url',
    ];
}
