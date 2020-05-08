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

Route::group([
	'prefix'=>'dashboard',
	'middleware' => ['auth', 'verified']
], function(){

	Route::get('/', [
		'uses' => 'PostsController@getDashboardIndex',
		'as'=> 'dashboardIndex'
	]);

	Route::get('/menu', [
		'uses' => 'FoodsController@getMenuIndex',
		'as'=> 'menuIndex'
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

	Route::get('/user', [
    	'uses' => 'PostsController@getUser',
    	'as' => 'getUsers'
	]);

	Route::get('/user/add', [
    	'uses' => 'PostsController@getAddUser',
    	'as' => 'getAddUser'
	]);

	Route::post('/user/add', [
    	'uses' => 'PostsController@postAddUser',
    	'as' => 'postAddUser'
	]);

	//Food routes
	Route::get('/food', [
    	'uses' => 'FoodsController@getFood',
    	'as' => 'getFoods'
	]);

	Route::post('/food/addtype', [
    	'uses' => 'FoodsController@postAddFoodType',
    	'as' => 'postAddFoodType'
	]);

	Route::get('/food/delete/type/{id}', [
		'uses' => 'FoodsController@getDeleteFoodType',
		'as' => 'deleteGetFoodType'
	]);

	Route::get('/food/delete/cuisine/{id}', [
		'uses' => 'FoodsController@getDeleteFoodCuisine',
		'as' => 'deleteGetFoodCuisine'
	]);

	Route::post('/food/addcuisine', [
    	'uses' => 'FoodsController@postAddFoodCuisine',
    	'as' => 'postAddFoodCuisine'
	]);

	Route::get('/food/add', [
    	'uses' => 'FoodsController@getAddFood',
    	'as' => 'addGetFood'
	]);	

	Route::post('/food/add', [
    	'uses' => 'FoodsController@postAddFood',
    	'as' => 'addPostFood'
	]);

	Route::get('/food/edit/{id}', [
		'uses' => 'FoodsController@getEditFood',
		'as' => 'editGetFood'
	]);

	Route::post('/food/edit/', [
		'uses' => 'FoodsController@postEditFood',
		'as' => 'editPostFood'
	]);

	Route::get('/food/delete/{id}', [
		'uses' => 'FoodsController@getDeleteFood',
		'as' => 'deletePostFood'
	]);


	//card
	Route::get('/card', [
		'uses' => 'CardsController@getCard',
		'as' => 'getCard'
	]);

 	Route::post('/addtocard', [
		'uses' => 'CardsController@addToCart',
		'as' => 'addToCard'
	]);

 	Route::post('/update', [
		'uses' => 'CardsController@update',
		'as' => 'addToCardUpdate'
	]);

 	Route::post('/delete', [
		'uses' => 'CardsController@delete',
		'as' => 'addToCardDelete'
	]);
	
 	//checkout
 	Route::post('/chekout', [
		'uses' => 'CardsController@checkoutOrder',
		'as' => 'checkoutOrder'
	]);


	Route::post('/table', [
		'uses' => 'PostsController@tables',
		'as' => 'reserveTable'
	]);

});


Auth::routes(['verify'=>true]);
