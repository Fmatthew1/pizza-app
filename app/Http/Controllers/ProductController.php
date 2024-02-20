<?php

namespace App\Http\Controllers;
use App\Product;
use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
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
        
        return view('products.create', ['products' => $products,]);

    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view("products.show", ["product"=> $product]);
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $users = User::all();
        return view("products.update", ["product"=> $product, "users"=> $users]);
    }

    public function store(Request $request)
   {
    
      $request->validate([
         'name' => 'required|unique:products|max:255',
         'price' => 'required',
         'description' => 'required',
         
     ]);

      $product = new Product();
      $product->name = $request->name;
      $product->price = $request->price;
      $product->description = $request->description;
      $product->save();
      return redirect('products')->with('success','Products successfully created');
   }

    public function update(Request $request, $id)
    {
        $productId = Product::find($id);
        $request->validate([
            'name' => [
                'required',
                Rule::unique('products')->ignore($productId),
                'max:255',
            ],
            'price' => [
                'required',
                Rule::unique('products')->ignore($productId),
                'max:255'
            ],
            'description' => [
                'required',
                Rule::unique('products')->ignore($productId),
                'max:255'
            ]
     ]);

        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        return redirect('products')->with('Success', 'products Successfully Updated');
    
    }
}
