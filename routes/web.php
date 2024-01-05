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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['namespace' => 'Product', 'prefix' => 'pizzas'], function(){
    Route::get('', 'PizzaController@index');
    Route::get('/create', 'PizzaController@create');
    Route::post('', 'PizzaController@store');
    Route::get('/{id}', 'PizzaController@show');
    Route::delete('/{id}', 'PizzaController@destroy');
});

Route::get('/pizzass', 'Product\PizzaController@index');

Route::get('/services', 'ServiceController@index')->name('index');
Route::get('/services/create', 'ServiceController@create')->name('create');
Route::post('services/store', 'ServiceController@store')->name('store');
Route::get('/services/{id}', 'ServiceController@show')->name('show');
Route::get('/services/{id}/edit', 'ServiceController@edit')->name('edit');
Route::put('/services/{id}', 'ServiceController@update')->name('update');
Route::delete('/services/{id}', 'ServiceController@destroy')->name('destroy');



    