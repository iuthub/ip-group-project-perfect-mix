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

Route::get('/addFood', [
    'uses' => 'PostsController@getAddFood',
    'as' => 'food.addFood'
]);

Route::post('/addFood', [
    'uses' => 'PostsController@postAddFood',
    'as' => 'food.addFood'
]);

// Route::get('login/', function () {
//     return view('auth.login');
// })->name('auth.login');

Route::get('/selected-cuisine', 'PostsController@populateCuisines');
Route::POST('/selected-cuisine', 'PostsController@saveCuisine')->name('save.selected-cuisine');

Route::get('/selected-foodType', 'PostsController@populateFoodType');
Route::POST('/selected-foodType', 'PostsController@saveFoodType')->name('save.selected-foodType');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
