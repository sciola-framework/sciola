<?php

try {
    $dirname  = dirname(__DIR__);
    $autoload = "$dirname/packages/vendor/autoload.php";
    if (file_exists($autoload)) {
        include_once $autoload;
        return Sciola\Settings::init($dirname);
    }
    throw new Exception('Error: The autoload.php file was not found!');
} catch (Exception $e) {
   echo $e->getMessage();
}
