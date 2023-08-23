<?php

namespace DefectiveCode\LinkSharer\Services;

class Mix extends Service
{
    protected string $baseUrl = 'https://mix.com/add';

    protected array $baseParameterMapping = [
        'url' => 'url',
    ];
}
