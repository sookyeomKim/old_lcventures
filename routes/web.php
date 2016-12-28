<?php
Auth::routes();

Route::get('/', ['as' => 'main', function () {
    return view('layouts.main');
}]);

Route::get('paypopup/lcv_payment', function () {
    return view('layouts.paypopup.lcv_payment');
});

Route::post('paypopup/lcv_payment_result', function () {
    return view('layouts.paypopup.lcv_payment_result');
});

Route::group(['prefix' => 'openApi'], function () {
    Route::get('firstCob', ['as' => 'openApi.firstCob', 'uses' => 'ApiController@getFirstCob']);
    Route::get('secondCob', ['as' => 'openApi.secondCob', 'uses' => 'ApiController@getSecondCob']);
});

Route::get('page/{pageName}', 'PageController@page');

Route::group(['prefix' => 'page/event'], function () {
    Route::get('{eventPageName}', 'EventPageController@getPage');
    Route::get('{eventPageName}/register/{registerLevel}', 'EventPageController@getCreatePage');
});

Route::group(['prefix' => 'baidu'], function () {
    Route::post('/', ['as' => 'baidu.store', 'uses' => 'BaiduController@storeBaidu']);
});

Route::group(['prefix' => 'searchNshoping'], function () {
    Route::post('/', ['as' => 'searchNshoping.store', 'uses' => 'InquiryController@storeSearchNshoping']);
});

Route::group(['middleware' => ['auth', 'roles'], 'roles' => ['Root']], function () {

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', ['as' => 'admin.index', 'uses' => 'AdminController@index']);

        Route::group(['prefix' => 'events'], function () {
            Route::get('/', ['as' => 'admin.events.index', 'uses' => 'AdminController@eventsIndex']);

            Route::group(['prefix' => 'baidu'], function () {
                Route::get('/', ['as' => 'admin.events.baidu.index', 'uses' => 'AdminController@baiduIndex']);
                Route::get('baidu', ['as' => 'baidu.list', 'uses' => 'BaiduController@getBaidu']);
            });

            Route::group(['prefix' => 'searchNshoping'], function () {
                Route::get('/', ['as' => 'admin.events.searchNshoping.index', 'uses' => 'AdminController@searchNshopingIndex']);
                Route::get('baidu', ['as' => 'searchNshoping.list', 'uses' => 'InquiryController@getSearchNshoping']);
            });
        });
    });
});


/*잘못된 URL로 유입될 때*/
Route::get('/{other}', function () {
    return \Redirect::route('main');
});