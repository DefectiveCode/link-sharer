<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

use Illuminate\Support\Arr;

abstract class Service
{
    protected string $baseUrl;

    /** @var array<string, string> */
    protected array $baseParameterMapping = [
        'text' => 'text',
        'url' => 'url',
    ];

    /** @var list<string> */
    protected array $additionalParameters = [];

    /** @var array<string, string> */
    protected array $defaultParameters = [];

    /** @param array<string, string> $attributes */
    public function __construct(
        protected array $attributes,
    ) {}

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
                ->merge($this->defaultParameters)
                ->only($this->allowedParameters())
                ->toArray()
        );
    }

    protected function isBaseParameter(string $parameter): bool
    {
        return in_array($parameter, ['url', 'text']);
    }

    /** @return list<string> */
    protected function allowedParameters(): array
    {
        return array_merge(
            array_values($this->baseParameterMapping),
            $this->additionalParameters,
            array_keys($this->defaultParameters),
        );
    }
}
