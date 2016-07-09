<?php


Route::get( '/', 'fe\staticPagesController@index' );
Route::get( '/about-us', 'fe\staticPagesController@aboutUs' );
Route::get( '/contact-us', 'fe\staticPagesController@contactUs' );

Route::get('/applications',function(){
	$applications = \App\Application::all();
	$output="";
	foreach($applications as $application){
		$output.= "<h1>". $application->name . "</h1><br>".
	                     "<i>". $application->email ."</i><hr>";
	}
	return    $output;
});
Route::get('/applications-json',function(){
	$applications = \App\Application::all();
	return $applications;
});

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
