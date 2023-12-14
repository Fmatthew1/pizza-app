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

Route::get('/pizzas', function () {
    $pizzas = [
        ['type' => 'Hawaiian', 'base' => 'Cheesy Crust'],
        ['type' => 'Volcano', 'base' => 'Garlic Crust'],
        ['type' => 'Veg Supreme', 'base' => 'Thin & Crispy']
        
    ];

    return view('pizzas', [
    'pizzas'=> $pizzas,
    'name' => request('name'),
    'age' => request('age')
    ]);
});
