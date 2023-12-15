<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pizza;

class PizzaController extends Controller
{
    public function index() {
        

        //$pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy('name', 'desc')->get();
        //$pizzas = Pizza::where('type', 'hawaiin')->get();
        $pizzas = Pizza::latest()->get();
        

        return view('pizzas', [
            'pizzas'=> $pizzas,
            ]);
    }

    public function show($id) {
        return view('details', ['id' => $id]);
    }
}
