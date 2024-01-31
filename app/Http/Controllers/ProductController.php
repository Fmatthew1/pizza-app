<?php

namespace App\Http\Controllers;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        
        return view("products.index", ["products"=> $products]);
    }

    public function create()
    {
        $products = new Product();
        $products->name = request("name");
        $products->price = request("price");
        $products->description = request("description");
        $products->user_id = request("user_id");
        $users = new User();

        return redirect("/products")->with("success","Products successfully added");

    }

    public function show($id)
    {
        $products = Product::findOrFail($id);
        return view("products.show", ["products"=> $products]);
    }

    
}
