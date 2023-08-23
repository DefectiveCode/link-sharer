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
                <x-link-sharer service="Baidu" via="ezra" text="SHARE ME" to="ezrabynx@gmail.com" url="https://google.com" hashtags="test,2" text="my summary" class="p-4">
                    <span class="text-red-900 font-bold m-10">SHARE ME</span>
                </x-link-sharer>


                <a href="https://www.linkedin.com/shareArticle?mini=true&url=google.com&title=title&summary=summary&source=facebook.com ">fdsfds</a>
            HTML;

            return Blade::render($html);
        });

    }
}
