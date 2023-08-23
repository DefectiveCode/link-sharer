<?php

namespace DefectiveCode\LinkSharer\Services;

class Evernote extends Service
{
    protected string $baseUrl = 'https://www.evernote.com/clip.action';

    protected array $baseParameterMapping = [
        'text' => 'title',
        'url' => 'url',
    ];
}
