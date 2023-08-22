<?php

namespace DefectiveCode\LinkSharer;

use DefectiveCode\LinkSharer\Services\Service;
use InvalidArgumentException;

class SharerFactory
{
    public static function make(string $service, array $attributes): Service
    {
        $class = __NAMESPACE__.'\\Services\\'.ucfirst($service);

        if (! class_exists($class)) {
            throw new InvalidArgumentException("Service {$service} does not exist. Please review the documentation for supported services.");
        }

        return new $class($attributes);
    }
}
