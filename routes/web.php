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
    Route::get('', 'PizzaController@index')->name('pizzas.index')->middleware('auth');
    Route::get('/create', 'PizzaController@create')->name('pizzas.create');
    Route::post('', 'PizzaController@store')->name('pizzas.store');
    Route::get('/{id}', 'PizzaController@show')->name('pizzas.show')->middleware('auth');
    Route::delete('/{id}', 'PizzaController@destroy')->name('pizzas.destroy')->middleware('auth');
});

Route::get('/pizzass', 'Product\PizzaController@index');

Route::get('/services', 'ServiceController@index')->name('services.index');
Route::get('/services/create', 'ServiceController@create')->name('services.create');
Route::post('services', 'ServiceController@store')->name('services.store');
Route::get('/services/{id}', 'ServiceController@show')->name('services.show');
Route::get('/services/{id}/edit', 'ServiceController@edit')->name('services.edit');
Route::put('/services/{id}', 'ServiceController@update')->name('services.update');
Route::delete('/services/{id}', 'ServiceController@destroy')->name('services.destroy');



    
Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
