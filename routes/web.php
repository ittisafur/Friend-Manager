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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('user')->group(function(){
	Route::get('/create', 'FriendController@create')->name('create');
	Route::post('/create', 'FriendController@store')->name('create.store');
	Route::get('/show/{id}', 'FriendController@show')->name('user.show');
	Route::get('/edit/{id}', 'FriendController@edit')->name('user.edit');
	Route::patch('/edit/{id}', 'FriendController@update')->name('user.update');
	Route::delete('/delete/{id}', 'FriendController@destroy')->name('user.delete');
	Route::resource('/location', 'LocationController');
	Route::resource('/education', 'EducationController');
});
