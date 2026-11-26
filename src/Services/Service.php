<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer\Services;

use Stringable;
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

    /** @param array<string, scalar|Stringable|null> $attributes */
    public function __construct(
        protected array $attributes,
    ) {}

    public function generateLink(): string
    {
        return $this->baseUrl.'?'.$this->encodedQueryParameters();
    }

    protected function encodedQueryParameters(): string
    {
        $service = clone $this;

        if (method_exists($service, 'prepareAttributes')) {
            $service->prepareAttributes();
        }

        return Arr::query(
            collect($service->attributes)
                ->mapWithKeys(fn ($value, $key) => [$this->baseParameterMapping[$key] ?? $key => $value])
                ->merge($this->defaultParameters)
                ->only($this->allowedParameters())
                ->toArray()
        );
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
