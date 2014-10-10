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
Route::get('delevent/{eventid}','EventController@deleteEvent');
Route::get('eventdetail/{eventid}','EventController@getEventDetail');
Route::post('addnewevent','EventController@addNewEvent');
Route::post('login','UserController@login');
Route::get('geteventlist','EventController@getEventList');

Route::get('/', function()
{
	return View::make('hello');
});
