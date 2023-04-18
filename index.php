<?php

use application\core\Router;
use application\lib\Db;

spl_autoload_register(function ($class)
{
    $path = str_replace('\\','/',$class.'.php');
    if (file_exists($path)) {
        require $path;
    }
});

$router = new Router();
$router->run();

