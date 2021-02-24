<?php
define('AUTOLOADER_NAME', 'autoloader.php');
require __DIR__ . DIRECTORY_SEPARATOR . AUTOLOADER_NAME;

use core\Router;
$basePath = dirname(__FILE__);
$templatesPath  = $basePath . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR;

if (Router::getRoute($_SERVER['REQUEST_URI'])) {
    echo 'lol';
}

require_once $templatesPath . "base.php";