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

	//------------------------------------------------------------------------
	//**********************Cat, Subcat, and Post Controllers*****************
	Route::get('/', function() {
		return Redirect::to('/categories');
	});
	Route::resource('/categories', 'CatController');
	Route::resource('/categories.subcategories', 'SubCatController');
	Route::resource('/categories.subcategories.posts', 'PostController');
	//Route::resource('/forum' , 'CatController');
	
	
	
	//-----------------------------------------------------------------------
	//*************Forum Controller*****************************************
	Route::get('/about', 'ForumPagesController@showAbout');
	Route::get('/contact', 'ForumPagesController@showContact');
	Route::get('/sources', 'ForumPagesController@showSources');
	//------End of Forum Controller---------------------------------------
	
	
	
	//--------------------------------------------------------------------
	//**********************User Controller******************************
	Route::post('/userlogin', 'UsersController@login');
	Route::get('/userlogout', 'UsersController@logout');
	Route::resource('/users', 'UsersController');

	
	
	//--------------------------------------------------
	//----------Filters start here----------------------
	

