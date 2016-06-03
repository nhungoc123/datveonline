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
        Route::any('new', array('as' => 'movie-add', 'uses' => 'MovieController@anyAdd'));
	    Route::any('edit/{id}', array('as' => 'movie-edit', 'uses' => 'MovieController@anyEdit'));
        Route::get('delete/{id}', array('as' => 'movie-delete', 'uses' => 'MovieController@delete'));
    });

    Route::group(['prefix' => 'performance'], function() {
        Route::get('/', array('as' => 'performance', 'uses' => 'PerformanceController@index'));
        Route::any('new', array('as' => 'performance-add', 'uses' => 'PerformanceController@anyAdd'));
        Route::any('edit/{id}', array('as' => 'performance-edit', 'uses' => 'PerformanceController@anyEdit'));
        Route::get('delete/{id}', array('as' => 'performance-delete', 'uses' => 'PerformanceController@delete'));
    });

    Route::group(['prefix' => 'screen'], function() {
        Route::get('/', array('as' => 'screen', 'uses' => 'ScreenController@index'));
        Route::any('new', array('as' => 'screen-add', 'uses' => 'ScreenController@anyAdd'));
        Route::any('edit/{id}', array('as' => 'screen-edit', 'uses' => 'ScreenController@anyEdit'));
        Route::get('delete/{id}', array('as' => 'screen-delete', 'uses' => 'ScreenController@delete'));
    });

    Route::group(['prefix' => 'seat'], function() {
        Route::any('/', array('as' => 'seat', 'uses' => 'SeatController@index'));
        
        Route::post('/seat/{screen}', array('as' => 'ajax-get-seat', 'uses' => 'SeatController@ajaxGetSeat'));

        Route::any('new', array('as' => 'seat-add', 'uses' => 'SeatController@anyAdd'));
        Route::any('edit/{id}', array('as' => 'seat-edit', 'uses' => 'SeatController@anyEdit'));
        Route::get('delete/{id}', array('as' => 'seat-delete', 'uses' => 'SeatController@delete'));
    });
});
