<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Traits;

trait AppendsLinks
{
    protected function prepareAttributes(): void
    {
        if (isset($this->attributes['text']) && isset($this->attributes['url'])) {
            $this->attributes['text'] = $this->attributes['text']."\n".$this->attributes['url'];

            return;
        }

        if (isset($this->attributes['url'])) {
            $this->attributes['text'] = $this->attributes['url'];
        }
    }
}
