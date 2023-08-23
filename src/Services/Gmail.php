<?php

namespace DefectiveCode\LinkSharer\Services;

use DefectiveCode\LinkSharer\Traits\AppendsLinks;

class Gmail extends Service
{
    use AppendsLinks;

    protected string $baseUrl = 'https://mail.google.com/mail/u/0';

    protected array $baseParameterMapping = [
        'text' => 'body',
    ];

    protected array $additionalParameters = [
        'bcc',
        'cc',
        'su',
        'to',
    ];

    protected array $defaultParameters = [
        'view' => 'cm',
    ];
}
