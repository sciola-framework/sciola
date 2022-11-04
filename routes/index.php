<?php

Route::add('/', function () {
    controller('WebSite')->page('home');
});

Route::add('/' . translate('about-the-page'), function () {
    controller('WebSite')->page('home');
});
