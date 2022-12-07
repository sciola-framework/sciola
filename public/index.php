<?php

if (is_file(__DIR__ . $_SERVER['REQUEST_URI'])) return false;
include_once dirname(__DIR__) . '/packages/node_modules/sciola/index.php';
Sciola::init();
