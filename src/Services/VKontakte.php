<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

class VKontakte extends Service
{
    protected string $baseUrl = 'https://vk.com/share.php';

    protected array $baseParameterMapping = [
        'text' => 'title',
        'url' => 'url',
    ];

    protected array $additionalParameters = [
        'description',
        'image',
    ];

    protected array $defaultParameters = [
        'noparse' => 'true',
    ];
}
