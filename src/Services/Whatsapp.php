<?php

namespace DefectiveCode\LinkSharer\Services;

use DefectiveCode\LinkSharer\Traits\AppendsLinks;

class Whatsapp extends Service
{
    use AppendsLinks;

    protected string $baseUrl = 'https://wa.me';
}
