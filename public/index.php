<?php

(function () {
    $dirname  = dirname(__DIR__);
    $autoload = "$dirname/packages/vendor/autoload.php";
    if (file_exists($autoload)) {
        include_once $autoload;
        Framework\Settings::init($dirname);
    } else {
        echo 'Error: The autoload.php file was not found!';
    }
})();
