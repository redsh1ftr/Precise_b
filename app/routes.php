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


Route::get('/', function()
{
	return View::make('main.hello');
});
//loggout
Route::get('/logout', function()
{
	return View::make('main.hello');
});

Route::get('/main', function()
{
	return View::make('main.main')
	->with('pagetitle', 'Main Hub');
});

Route::get('/worker', function()
{
	return View::make('worker.worker')
	->with('pagetitle', 'Main Hub');
});

//client routes

Route::get('clients', array('uses' => 'ClientController@clientLookup'));

