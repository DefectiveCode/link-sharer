<?php

namespace DefectiveCode\LinkSharer;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class LinkSharerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Blade::component('link-sharer', LinkSharer::class);

        Route::get('test', function () {
            $html = <<<'HTML'
                <script src="https://cdn.tailwindcss.com"></script>
                <x-link-sharer service="whatsapp" text="SHARE ME" url="https://google.com" class="p-4">
                    <span class="text-red-900 font-bold m-10">SHARE ME ON TWITTER</span>
                </x-link-sharer>
            HTML;

            return Blade::render($html);
        });

    }
}
