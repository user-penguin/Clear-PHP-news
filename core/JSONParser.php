<?php

namespace core;

define('ROUTE_CONFIG', __DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'routes.json');

class JSONParser
{
    public static function parseYAML(string $uri): array
    {
        if (file_exists(ROUTE_CONFIG)) {
            $readFile = file_get_contents(ROUTE_CONFIG);
            $readFile = str_replace(["\n", " "], "", $readFile);
            $arrayJSON = json_decode($readFile, true);
            return [
                'status' => 'ok',
                'data' => [],
            ];
        } else {
            return [
                'status' => 'error',
                'data' => [],
            ];
        }
    }
}