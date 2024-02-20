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

Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/create', 'UserController@create')->name('users.create');
Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');
Route::get('/users/{id}', 'UserController@show')->name('users.show');
Route::post('/users', 'UserController@store')->name('users.store');
Route::put('/users/{id}', 'UserController@update')->name('users.update');

Route::get('/roles', 'RoleController@index')->name('roles.index');
Route::get('/roles/create', 'RoleController@create')->name('roles.create');
Route::get('roles/{id}/edit', 'RoleController@edit')->name('roles.edit');
Route::get('/roles/{id}', 'RoleController@show')->name('roles.show');
Route::post('/roles', 'RoleController@store')->name('roles.store');
Route::put('/roles/{id}', 'RoleController@update')->name('roles.update');


Route::get('/permissions', 'PermissionController@index')->name('permissions.index');
Route::get('/permissions/create', 'PermissionController@create')->name('permissions.create');
Route::get('permissions/{id}/edit', 'PermissionController@edit')->name('permissions.edit');
Route::get('/permissions/{id}', 'PermissionController@show')->name('permissions.show');
Route::post('/permissions', 'PermissionController@store')->name('permissions.store');
Route::put('/permissions/{id}', 'PermissionController@update')->name('permissions.update');

Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::get('/products/{id}', 'ProductController@show')->name('products.show');
Route::get('/products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::post('/products', 'ProductController@store')->name('products.store');
Route::put('/products/{id}', 'ProductController@update')->name('products.update');






    
Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin.index');

