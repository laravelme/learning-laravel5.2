<?php


/*
|--------------------------------------------------------------------------
| Front-end Routes
|--------------------------------------------------------------------------
*/
Route::group(
    [
        'middleware' => 'web',
        'as'         => 'fe.',
    ],
    function () {
        Route::auth();
        Route::get('/', ['uses' => 'fe\staticPagesController@index', 'as' => 'index']);
        Route::get('/home', ['uses' => 'fe\staticPagesController@index', 'as' => 'home']);
        Route::get('/about-us', ['uses' => 'fe\staticPagesController@aboutUs', 'as' => 'about-us']);
        Route::get('/contact-us', ['uses' => 'fe\staticPagesController@contactUs', 'as' => 'contact-us']);
    }
);


/*
|--------------------------------------------------------------------------
| Back-end Routes
|--------------------------------------------------------------------------
*/
Route::group(
    [
        'prefix'     => 'be',
        'as'         => 'be.', /* resources */
        'middleware' => ['web', 'auth'],
    ],
    function () {
        Route::get('/', ['uses' => 'be\BackendController@index', 'as' => 'index']);
    }
);