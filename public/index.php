<?php

define("ROOT", dirname(__DIR__));
define("PUBLIC", ROOT . '/public');
define("CORE", ROOT . '/core');
define("APP", ROOT . '/app');
define("CONTROLLERS", APP . '/controllers');
define("VIEWS", APP . '/views');
define("PATH", 'http://localhost');

require CORE .'/funcs.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');

dump($_GET);

if($uri === '') {
    require CONTROLLERS. '/index.php';
} elseif($uri === 'controllers/about') {
    require CONTROLLERS. '/about.php';
} else {
    abort();
}
