<?php

use Sciola\Route;

Route::add('/', function () {
    controller('WebSite')->page('home');
});

Route::add('/' . translate('about-the-page'), function () {
    controller('WebSite')->page('about');
});

Route::add('/' . translate('options') . '/(.*)', function ($item) {
        $options = array(1 => 'item-1', 2 => 'item-2', 3 => 'item-3');
        array_search($item, $options) ?
        controller('WebSite')->page("Options/$item") :
        Route::error(404);
});
