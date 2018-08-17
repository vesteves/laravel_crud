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

Route::prefix('cliente')->group(function () {
    Route::get('/', 'ClienteController@index')->name('cliente.index');
    Route::get('create', 'ClienteController@create')->name('cliente.create');
    Route::get('edit/{cliente}', 'ClienteController@edit')->name('cliente.edit');

    Route::post('store', 'ClienteController@store')->name('cliente.store');
    Route::put('update/{cliente}', 'ClienteController@update')->name('cliente.update');

    Route::delete('destroy/{cliente}', 'ClienteController@destroy')->name('cliente.destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
