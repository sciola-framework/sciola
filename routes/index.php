<?php

use Sciola\Route;

Route::add('/', function () {
    controller('WebSite')->page('home');
});

Route::add('/' . translate('about-the-page'), function () {
    controller('WebSite')->page('about');
});

Route::add('/' . translate('options') . '/(.*)', function ($item) {
    controller('WebSite')->page("Options/$item");
});
