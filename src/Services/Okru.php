<?php

namespace DefectiveCode\LinkSharer\Services;

class Okru extends Service
{
    protected string $baseUrl = 'https://connect.ok.ru/dk';

    protected array $baseParameterMapping = [
        'url' => 'st.shareUrl',
    ];

    protected array $defaultParameters = [
        'st.cmd' => 'WidgetSharePreview',
    ];
}
