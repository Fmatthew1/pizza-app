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

Route::get('/services', 'ServiceController@index');
Route::get('/services/create', 'ServiceController@create');
Route::post('services/store', 'ServiceController@store');
Route::get('/services/{id}/edit', 'ServiceController@edit');



    