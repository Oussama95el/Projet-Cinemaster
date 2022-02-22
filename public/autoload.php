<?php
session_start();
require_once './url.php';
spl_autoload_register('autoload');

function  autoload($class_name)
{
    $array_paths = array(
    'controller/classes',
    'model/',
    'controller/'
);
    $parts = explode('\\', $class_name);
    $name = array_pop($parts);

    foreach ($array_paths as $path) {
    $file = sprintf($path . '%s.php', $name);
        if (is_file($file)) {
        require_once $file;
        }
    }
}