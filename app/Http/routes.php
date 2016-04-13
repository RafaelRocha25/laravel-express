<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//PUBLIC
Route::get('/', 'PostController@index');
Route::get('/posts', 'PostController@index');
Route::get('/boleto', 'TestController@boleto');

Route::group(['prefix' => 'admin'], function() {

	Route::group(['prefix' => 'posts'], function() {

		Route::get('/', ['as' => 'admin.index', 'uses' => 'PostsAdminController@index']);
		Route::get('create', ['as' => 'admin.posts.create', 'uses' => 'PostsAdminController@create']);
		Route::get('edit/{id}', ['as' => 'admin.posts.edit', 'uses' => 'PostsAdminController@edit']);
		Route::post('store', ['as' => 'admin.posts.store', 'uses' => 'PostsAdminController@store']);
		Route::post('update/{id}', ['as' => 'admin.posts.update', 'uses' => 'PostsAdminController@update']);
		Route::get('destroy/{id}', ['as' => 'admin.posts.destroy', 'uses' => 'PostsAdminController@destroy']);

	});
});
//ADMIN