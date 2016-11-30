<?php
Auth::routes();

Route::get('/', function () {
    return view('layouts.main');
});

Route::get('page/{pageName}', 'PageController@page');

Route::get('popup/lcv_payment', function () {
    return view('layouts.popup.lcv_payment');
});

Route::resource('admin', 'AdminController');

Route::resource('inquiry', 'InquiryController');