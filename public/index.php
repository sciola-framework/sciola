<?php

try {
    if (is_file(__DIR__ . $_SERVER['REQUEST_URI'])) {
        return false;
    }
    $dirname  = dirname(__DIR__);
    $autoload = "$dirname/packages/node_modules/sciola/vendor/autoload.php";
    if (file_exists($autoload)) {
        include_once $autoload;
        return Sciola\Settings::init($dirname);
    }
    throw new Exception('Error: The autoload.php file was not found!');
} catch (Exception $e) {
   echo $e->getMessage();
}
