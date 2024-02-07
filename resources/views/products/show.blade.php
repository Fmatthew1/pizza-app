@extends('Layouts.app')

@section('content')

         <div class="wrapper-pizza-detals">
            <h1>Show A Single Product</h1>
            <p>{{ $product->name }}</p>
            <p>{{ $product->price }}</p>
            <p>{{ $product->description }}</p>
            <a href="/products" class="back">Back To All Products</a>
         </div>
         
            
               

@endsection