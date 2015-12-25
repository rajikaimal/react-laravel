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
//add extra extension to render pure html alongside with php
View::addExtension('html', 'php');

Route::get('/', function () {
    return view('welcome');
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

Route::get('/blog', function() {
	return view('Blog');
});
//route for inserting
Route::post('/tweets/create', 'BlogController@create');
//route for deleting
Route::post('/tweets/delete', 'BlogController@delete');
//route for updating
Route::post('/tweets/edit', 'BlogController@edit');
//route for retrieving all
Route::get('/tweets/all', 'BlogController@getall');
