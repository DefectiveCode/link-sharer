<?php

namespace DefectiveCode\LinkSharer\Services;

use DefectiveCode\LinkSharer\Traits\AppendsLinks;

class YahooMail extends Service
{
    use AppendsLinks;

    protected string $baseUrl = 'https://compose.mail.yahoo.com';

    protected array $baseParameterMapping = [
        'text' => 'body',
    ];
}
