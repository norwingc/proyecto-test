<?php

use App\Models\Son;
use App\Models\People;

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

Route::get('/test', function () {
	// return People::with(['sons' => function($son){
		// 	$son->where('age', '>', 2);
		// }])->find(1);
	});

Auth::routes();

Route::middleware(['auth'])->group(function () {
	Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
	Route::get('/', 'HomeController@index')->name('home');
	Route::post('/People/store', 'PeopleController@store')->name('people.store');
	Route::get('/People/show/{People}', 'PeopleController@show')->name('people.show');
	Route::post('/People/update/{People}', 'PeopleController@update')->name('people.update');
	Route::delete('/People/delete/{People}', 'PeopleController@delete')->name('people.delete');
});


