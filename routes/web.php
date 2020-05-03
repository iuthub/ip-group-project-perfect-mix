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


Route::group([
	'prefix'=>'dashboard',
	'middleware' => ['auth', 'verified']
], function(){

	Route::get('/', [
		'uses' => 'PostsController@getDashboardIndex',
		'as'=> 'dashboardIndex'
	]);

	// Route::get('/edit/{id}', [
	// 	'uses' => 'TaskController@getAdminEdit',
	// 	'as' => 'adminEdit'
	// ]);


	// Route::post('/edit', [
	// 	'uses' => 'TaskController@postAdminEdit',
	// 	'as' => 'adminEditPost'
	// ]);


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

		
});


Auth::routes(['verify'=>true]);

Auth::routes();
