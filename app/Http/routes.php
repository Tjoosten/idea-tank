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
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::get('logout', 'Auth\AuthController@logout');
Route::post('login', 'Auth\AuthController@login');
//Route::auth();


Route::resource('idea', 'IdeaController');
Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');

// Profile management routes.
Route::get('/profile','AccountController@changeView')->name('profile.edit');
Route::post('/profile', 'AccountController@changeMethod')->name('profile.update');

// to-do item routes
Route::get('/todo', 'TodoController@index')->name('todo.index');
Route::get('/todo/destroy/{id}', 'TodoController@destroy')->name('todo.destroy');

// Ideas routes.

// Settings routing.

