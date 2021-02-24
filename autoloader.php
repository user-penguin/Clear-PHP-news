<?php

define('BASE_DIR', __DIR__);

spl_autoload_register(function ($class) {
    $pathParts = explode('\\', $class);
    $last = array_pop($pathParts);
    $last .= '.php';
    $required = '';
    foreach ($pathParts as $part) {
        $required = '/' . array_pop($pathParts) . $required;
    }
    $required = $required . '/' . $last;
    $required = BASE_DIR . str_replace('\\', '/', $required);

    if (file_exists($required)) {
        require_once $required;
    }
});