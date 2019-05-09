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

Route::get('dolists','dolistsController@index');
Route::get('/dolists/{dolist}','dolistsController@show');
Route::get('/new-dolist','dolistsController@create');
Route::post('store-dolists','dolistsController@store');