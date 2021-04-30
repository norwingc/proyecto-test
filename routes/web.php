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

Route::get('/', 'HomeController@index')->name('home');
Route::post('/People/store', 'PeopleController@store')->name('people.store');
Route::get('/People/show/{People}', 'PeopleController@show')->name('people.show');
Route::post('/People/update/{People}', 'PeopleController@update')->name('people.update');
Route::get('/People/delete/{People}', 'PeopleController@delete')->name('people.delete');
