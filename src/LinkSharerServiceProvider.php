<?php

namespace DefectiveCode\LinkSharer;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LinkSharerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Blade::component('link-sharer', LinkSharer::class);
    }
}
