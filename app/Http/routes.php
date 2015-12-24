<?php


Route::get( '/', 'staticPagesController@index' );
Route::get( '/about-us', 'staticPagesController@aboutUs' );
Route::get( '/contact-us', 'staticPagesController@contactUs' );

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	//
});
