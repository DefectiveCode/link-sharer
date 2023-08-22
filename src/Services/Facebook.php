<?php

namespace DefectiveCode\LinkSharer\Services;

class Facebook extends Service
{
    protected function mapParameters(): array
    {
        return [
            'url' => 'u',
        ];
    }

    protected function baseUrl(): string
    {
        return 'https://www.facebook.com/sharer/sharer.php';
    }
}
