<?php

namespace DefectiveCode\LinkSharer\Services;

class Twitter extends Service
{
    protected function mapParameters(): array
    {
        return [
            'text' => 'text',
            'url' => 'url',
        ];
    }

    protected function baseUrl(): string
    {
        return 'https://twitter.com/intent/tweet';
    }
}
