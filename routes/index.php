<?php

Route::add('/', function () {
    controller('WebSite')->page('home');
});

Route::add('/' . translate('home'), function () {
    controller('WebSite')->page('home');
});
