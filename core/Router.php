<?php

namespace core;

class Router
{
    public static function getRoute(string $uri): string
    {
        $response = JSONParser::parseYAML($uri);
    }
}