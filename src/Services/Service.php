<?php

namespace DefectiveCode\LinkSharer\Services;

use Illuminate\Support\Arr;

abstract class Service
{
    public function __construct(
        protected array $attributes,
    ) {
    }

    public function generateLink(): string
    {
        return $this->baseUrl().'?'.$this->encodedQueryParameters();
    }

    abstract protected function mapParameters(): array;

    abstract protected function baseUrl(): string;

    protected function encodedQueryParameters(): string
    {
        $this->prepareAttributes();

        return Arr::query(
            collect($this->attributes)
                ->only(array_keys($this->mapParameters()))
                ->mapWithKeys(fn ($value, $key) => [$this->mapParameters()[$key] => $value])
                ->filter()
                ->toArray()
        );
    }

    protected function prepareAttributes(): void
    {
    }
}
