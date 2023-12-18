@extends('Layouts.layout')

@section('content')
    <div class="wrapper pizza-details">
      <h2> Order for {{ $pizza->name}}</h2>
      <p class="type">Type - {{ $pizza->type}}</p>
      <p class="base">Base - {{ $pizza->base}}</p>
    </div>
    <a href="/pizzas" class="back">Back to All pizzas</a>
@endsection

