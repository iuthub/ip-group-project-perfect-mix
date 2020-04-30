<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
	'uses' => 'PostsController@getIndex',
	'as' => 'mainIndex'
]);


Route::get('/table', [
	'uses' => 'PostsController@table',
	'as' => 'table'
]);

Route::get('/edit', [
	'uses' => 'PostsController@adminInfoChange',
	'as' => 'userInfoEdit'
]);

// Route::get('login/', function () {
//     return view('auth.login');
// })->name('auth.login');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
