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
use App\Team;

Route::get('/', 'TeamsController@index')->name('teams');

Route::get('/verify/{id}', 'RegisterController@verify');

Route::get('/login', 'LoginController@create')->name('login');

Route::post('/login', 'LoginController@store');

Route::get('/teams/{id}', 'TeamsController@show');

Route::post('/teams/{id}', 'CommentsController@store');

Route::get('/players/{id}', 'PlayersController@show');

Route::get('/register', 'RegisterController@create')->name('register');

Route::post('/register', 'RegisterController@store');

Route::get('/logout', 'LoginController@destroy')->name('logout');

Route::get('/news', 'NewsController@index');

Route::get('/news/{id}', 'NewsController@show');

Route::get('/news/team/{name}', 'NewsController@filterByTeams');
