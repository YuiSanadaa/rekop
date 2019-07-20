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
	
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'HomeController@admin');
Route::get('/dashboard','HomeController@dashboard');

Route::prefix('admin')->group(function () {
	Route::get('quotes', 'QuotesController@index');
    Route::resource('menu', 'MenuController');
    Route::resource('pesan', 'PesanController');
});
Route::resource('quotes', 'QuotesController');

Route::get('/', 'MenuController@user');
// Route::get('/', function () {
//     return view('home');
// });
