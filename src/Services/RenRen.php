<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

class RenRen extends Service
{
    protected string $baseUrl = 'http://widget.renren.com/dialog/share';

    protected array $baseParameterMapping = [
        'text' => 'title',
        'url' => 'resourceUrl',
    ];

    protected array $additionalParameters = [
        'description',
        'srcUrl',
    ];
}
