@extends('Layouts.app')

@section('content')
    <div class="wrapper pizza-details">
      <h2> Order for {{ $pizza->name}}</h2>
      <p class="type">Type - {{ $pizza->type}}</p>
      <p class="base">Base - {{ $pizza->base}}</p>
      <p class="toppings">Extra toppings:</p>
      <ul>
        @foreach($pizza->toppings as $topping)
            <li>{{ $topping }}</li>
        @endforeach
      </ul>
      <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST"></form>
        @csrf 
        @method('DELETE')
        <button type="submit" value="submit">Complete Order</button>
    </div>
    <a href="/pizzas" class="back">Back to All pizzas</a>
@endsection

