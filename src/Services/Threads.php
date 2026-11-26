<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

class Threads extends Service
{
    protected string $baseUrl = 'https://www.threads.com/intent/post';

    protected array $additionalParameters = [
        'quote_post_shortcode',
        'reply_control',
        'reply_post_shortcode',
        'tag',
    ];
}
