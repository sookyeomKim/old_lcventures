<?php
Auth::routes();

Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/{pageName}','PageController@page');

