@extends('Layouts.layout')

@section('content')
    <div class="wrapper create-pizza">
      <h1>create A New Pizza</h1>
        <form action="/pizzas" method="POST">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name">
            <label for="type">Choose a Pizza Type:</label>
            <select name="type" id="type">
                <option value="margherita">Margherita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="valcano">Valcano</option>
            </select>
            <label for="type">Choose a Pizza base:</label>
            <select name="base" id="base">
                <option value="chessy crust">Chessy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin & crispy">Thin & Crispy</option>
                <option value="thick">Thick</option>
                <input type="submit" value="Order A Pizza">
            </select>
        </form>
    </div>
@endsection

