<?php

namespace DefectiveCode\LinkSharer\Services;

class Meneame extends Service
{
    protected string $baseUrl = 'https://www.meneame.net/submit.php';

    protected array $baseParameterMapping = [
        'url' => 'url',
    ];
}
