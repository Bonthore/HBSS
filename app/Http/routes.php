<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'FrontendController@showDashboard');
Route::get('profile', 'FrontendController@showProfile');
Route::get('feed', 'FrontendController@showFeed');
Route::get('user', 'FrontendController@showUser');
Route::get('settings', 'FrontendController@showSettings');
Route::get('watch', 'FrontendController@showWatch');
Route::get('watch/{id}/episode/{ep}', function ($UrlID, $UrlEp) {
    return 'FrontendController@showWatch';
});
Route::get('listen', 'FrontendController@showListen');