@extends('Layouts.layout')

@section('content')
    <div class="wrapper create-pizza">
      <h1>create A New Pizza</h1>
        <form action="/pizzas" method="POST">
            @csrf
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
                <fieldset>
                    <label>Extra Toppings</label>
                    <input type="checkbox" name="toppings" value="mushrooms">Mushrooms<br>
                    <input type="checkbox" name="toppings" value="peppers">Peppers<br>
                    <input type="checkbox" name="toppings" value="garlic">Garlic<br>
                    <input type="checkbox" name="toppings" value="olives">Olives<br>
                </fieldset>
                <input type="submit" value="Order A Pizza">
            </select>
        </form>
    </div>
@endsection

