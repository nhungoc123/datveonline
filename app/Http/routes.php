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

// Route::get('admin', ['middleware' => 'admin', 'uses' => 'AdminController@index']);

// Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
//     return "This page requires that you be logged in and an Admin";
// }]);

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'admin', 'namespace' => 'backend', 'middleware' => 'auth'], function()
{
    Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'DashboardController@index'));

    Route::group(['prefix' => 'movie'], function() {
    	Route::get('/', array('as' => 'movie', 'uses' => 'MovieController@index'));
	    Route::any('edit/{id}', array('as' => 'movie-edit', 'uses' => 'MovieController@anyEdit'));
	    
	    Route::any('new', array('as' => 'movie-add', 'uses' => 'MovieController@anyAdd'));	
    });

    
});
