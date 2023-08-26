<?php

namespace DefectiveCode\LinkSharer\Services;

class Douban extends Service
{
    protected string $baseUrl = 'https://www.douban.com/share/service';

    protected array $baseParameterMapping = [
        'text' => 'name',
        'url' => 'href',
    ];

    protected array $additionalParameters = [
        'comment',
        'text',
    ];
}
