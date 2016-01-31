<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
  Route::post('login', 'AuthController@postAuthenticate');
});

Route::group(['middleware' => ['jwt.auth', 'jwt.user']], function () {
    Route::get('me', 'Auth\AuthController@getMe');
    Route::get('me/organization', 'UserController@getMyOrganization');


});
