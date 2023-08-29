<?php

declare(strict_types=1);

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
        return $this->baseUrl.'?'.$this->encodedQueryParameters();
    }

    protected function encodedQueryParameters(): string
    {
        if (method_exists($this, 'prepareAttributes')) {
            $this->prepareAttributes();
        }

        return Arr::query(
            collect($this->attributes)
                ->mapWithKeys(function ($value, $key) {
                    if ($this->isBaseParameter($key) && isset($this->baseParameterMapping[$key])) {
                        return [$this->baseParameterMapping[$key] => $value];
                    }

                    return [$key => $value];
                })
                ->merge($this->defaultParameters ?? [])
                ->only($this->allowedParameters())
                ->toArray()
        );
    }

    protected function isBaseParameter(string $parameter): bool
    {
        return in_array($parameter, ['url', 'text']);
    }

    protected function allowedParameters(): array
    {
        return array_merge(
            property_exists($this, 'baseParameterMapping') ? array_values($this->baseParameterMapping) : ['text', 'url'],
            property_exists($this, 'additionalParameters') ? array_values($this->additionalParameters) : [],
            property_exists($this, 'defaultParameters') ? array_keys($this->defaultParameters) : [],
        );
    }
}
