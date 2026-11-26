<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer;

use Closure;
use Stringable;
use Illuminate\View\Component;
use Illuminate\View\ComponentAttributeBag;

class LinkSharer extends Component
{
    public function __construct(
        public string $service,
        public string $class = '',
        public string $target = '_blank',
    ) {}

    public function render(): Closure
    {
        return function (array $data): string {
            /** @var array{service: string, slot: Stringable|string, attributes: ComponentAttributeBag} $data */
            /** @var array<string, string> $attributes */
            $attributes = $data['attributes']->getAttributes();
            $service = SharerFactory::make($data['service'], $attributes);
            $shareLink = $service->generateLink();

            return '<a href="'.$shareLink.'" target="'.$this->target.'" class="'.$this->class.'">'.$data['slot'].'</a>';
        };
    }
}
