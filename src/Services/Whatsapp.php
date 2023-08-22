<?php

namespace DefectiveCode\LinkSharer\Services;

class Whatsapp extends Service
{
    protected function mapParameters(): array
    {
        return [
            'text' => 'text',
        ];
    }

    protected function baseUrl(): string
    {
        return 'https://wa.me';
    }

    protected function prepareAttributes(): void
    {
        if (isset($this->attributes['text']) && isset($this->attributes['url'])) {
            $this->attributes['text'] = $this->attributes['text'].' '.$this->attributes['url'];

            return;
        }

        if (isset($this->attributes['url'])) {
            $this->attributes['text'] = $this->attributes['url'];
        }
    }
}
