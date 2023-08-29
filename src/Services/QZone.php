<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

class QZone extends Service
{
    protected string $baseUrl = 'https://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey';

    protected array $baseParameterMapping = [
        'text' => 'title',
        'url' => 'url',
    ];

    protected array $additionalParameters = [
        'summary',
    ];
}
