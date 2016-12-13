<?php
Auth::routes();

Route::get('/', ['as' => 'main', function () {
    return view('layouts.main');
}]);

Route::get('/{other}', function () {
    return \Redirect::route('main');
});

Route::get('popup/lcv_payment', function () {
    return view('layouts.popup.lcv_payment');
});

Route::group(['prefix' => 'openApi'], function () {
    Route::get('firstCob', ['as' => 'openApi.firstCob', 'uses' => 'ApiController@getFirstCob']);
    Route::get('secondCob', ['as' => 'openApi.secondCob', 'uses' => 'ApiController@getSecondCob']);
});

Route::resource('inquiry', 'InquiryController');

Route::get('page/{pageName}', 'PageController@page');


Route::group(['prefix' => 'page/event'], function () {
    Route::get('{eventPageName}', 'EventPageController@getPage');
    Route::get('{eventPageName}/create', 'EventPageController@getCreatePage');
});

/*Route::get('')*/

Route::group(['middleware' => ['auth', 'roles'], 'roles' => ['Root']], function () {
    Route::resource('admin', 'AdminController');
});