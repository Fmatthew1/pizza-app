@extends('Layouts.app')

@section('content')

         <div class="wrapper-pizza-detals">
            <h1>Show A Single Product</h1>
            <p>{{ $product->name }}</p>
         </div>
         <form action="{{ route('products.destroy', $product->id) }}" method="POST">
         @csrf 
         @method('DELETE')
         <button type="submit" value="submit">Delete A Product</button>
         </form>
         <a href="/products" class="back">Back To All Products</a>

@endsection