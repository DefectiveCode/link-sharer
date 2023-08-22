<?php

namespace DefectiveCode\LinkSharer;

use Closure;
use Illuminate\View\Component;

class LinkSharer extends Component
{
    public function __construct(
        public string $service,
        public string $target = '_blank',
        public string $class = '',
    ) {
    }

    public function render(): Closure
    {
        return function (array $data) {
            $service = SharerFactory::make($data['service'], $data['attributes']->getAttributes());
            $shareLink = $service->generateLink();

            return '<a href="'.$shareLink.'" target="'.$this->target.'" class="'.$this->class.'">'.$data['slot'].'</a>';
        };
    }
}
