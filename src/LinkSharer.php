<?php

declare(strict_types=1);

namespace DefectiveCode\LinkSharer;

use Closure;
use Stringable;
use Illuminate\View\Component;

class LinkSharer extends Component
{
    public function __construct(
        public string $service,
        public string $class = '',
        public string $target = '_blank',
    ) {}

    public function render(): Closure
    {
        return $this->renderLink(...);
    }

    /** @param array{slot: Stringable|string} $data */
    protected function renderLink(array $data): string
    {
        /** @var array<string, scalar|Stringable|null> $attributes */
        $attributes = $this->attributes->getAttributes();
        $shareLink = SharerFactory::make($this->service, $attributes)->generateLink();

        return '<a href="'.$shareLink.'" target="'.$this->target.'" class="'.$this->class.'">'.$data['slot'].'</a>';
    }
}
