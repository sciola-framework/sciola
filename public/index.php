<?php

if (is_file(dirname(__FILE__) . $_SERVER['REQUEST_URI'])) return false;
$app  = dirname(__DIR__);
$path = parse_ini_file("$app/config/path.ini", true);
include_once "$app{$path['node_modules']}/sciola/index.php";
Sciola::index($app, $path);
