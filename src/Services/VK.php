<?php

namespace DefectiveCode\LinkSharer\Services;

class VK extends Service
{
    protected string $baseUrl = 'http://vk.com/share.php';

    protected array $baseParameterMapping = [
        'text' => 'title',
        'url' => 'url',
    ];

    protected array $additionalParameters = [
        'comment',
    ];
}
