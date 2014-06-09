<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('test',function()
{

	return app('env');
});

Route::get('/', function()
{
    if(Session::get('logUser') != null)
        return Redirect::to('dashboard');
	return View::make('pages.login');
});
Route::get('logout',function()
{
        Session::flush();
    return Redirect::to('/');
});

Route::post('receive/capture', 'ReceiveController@postCapture');