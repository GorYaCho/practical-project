<?php

session_start();

require_once __DIR__ . '/../vendor/autoload.php';
require dirname(__DIR__) . '/config/config.php';
require_once __DIR__ . '/bootstrap.php';
require CORE . '/funcs.php';

//$url = 'posts/id-dolorem-qui-adim';
//$pattern = '#^posts/(?P<slug>[a-z0-9-]+)$#';
//var_dump(preg_match($pattern, $url, $matches));
//echo '</pre>';
//print_r($matches);
//echo '</pre>';

$router = new \myfrm\Router();
require CONFIG . '/routes.php';

$router->match();
