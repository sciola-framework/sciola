<?php

$path = dirname(__DIR__);
include_once "$path/packages/node_modules/sciola/index.php";
return Sciola::index($path);
