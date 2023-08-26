<?php

namespace DefectiveCode\LinkSharer\Services;

class Plurk extends Service
{
    protected string $baseUrl = 'https://www.plurk.com/m';

    protected array $baseParameterMapping = [
        'url' => 'status',
    ];

    protected array $defaultParameters = [
        'qualifier' => 'shares',
    ];
}
