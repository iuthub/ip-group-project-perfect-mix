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


// Route::get('/table', [
// 	'uses' => 'PostsController@table',
// 	'as' => 'table'
// ]);

Route::group([
	'prefix'=>'dashboard',
	'middleware' => ['auth', 'verified']
], function(){

	Route::get('/', [
		'uses' => 'PostsController@getDashboardIndex',
		'as'=> 'dashboardIndex'
	]);

	Route::get('/edit', [
		'uses' => 'PostsController@getUserEdit',
		'as' => 'getUserEdit'
	]);
	
	Route::post('/edit', [
		'uses' => 'PostsController@postUserEdit',
		'as' => 'postUserEdit'
	]);

	Route::get('/edit/{id}', [
		'uses' => 'PostsController@getAdminUserEdit',
		'as' => 'getAdminUserEdit'
	]);

	Route::post('/edit', [
		'uses' => 'PostsController@postAdminUserEdit',
		'as' => 'postAdminUserEdit'
	]);

	Route::get('/delete{id}', [
		'uses' => 'PostsController@getAdminUserDelete',
		'as' => 'getAdminUserDelete'
	]);

	// Route::get('/create', [
	// 	'uses' => 'TaskController@getAdminCreate',
	// 	'as' => 'adminCreate'
	// ]);

	// Route::post('/create', [
	// 	'uses' => 'TaskController@postAdminCreate',
	// 	'as' => 'adminCreatePost'
	// ]);

	// Route::get('/delete/{id}', [
	// 	'uses' => 'TaskController@getAdminDelete',
	// 	'as' => 'adminDelete'
	// ]);

	//Food routes
	Route::get('/addFood', [
    	'uses' => 'FoodsController@getAddFood',
    	'as' => 'addGetFood'
	]);

	Route::post('/addFood', [
    	'uses' => 'FoodsController@postAddFood',
    	'as' => 'addPostFood'
	]);

	Route::get('/editFood/{id}', [
		'uses' => 'FoodsController@getEditFood',
		'as' => 'editGetFood'
	]);

	Route::post('/editFood', [
		'uses' => 'FoodsController@postEditFood',
		'as' => 'editPostFood'
	]);

	Route::get('/deleteFood/{id}', [
		'uses' => 'FoodsController@getDeleteFood',
		'as' => 'deletePostFood'
	]);

		
});


Auth::routes(['verify'=>true]);

Auth::routes();
