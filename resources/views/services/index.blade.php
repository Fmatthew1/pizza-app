@extends('Layouts.layout')

@section('content')
<div class="">
    <table class="wrapper">
            <thead>
                @foreach($services as $service)
                <tr class="pizza-details">
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr class="pizza-details">
                    <td>Diesel</td>
                    <td>11000</td>
                    <td>Buy from recognized dealer</td>
                </tr>
                <tr class="pizza-details">
                    <td>Machine Parts</td>
                    <td>3000</td>
                    <td>Buy the original parts</td>
                </tr>
                <tr class="pizza-details">
                    <td>Auto-mobile</td>
                    <td>44000</td>
                    <td>purchase the original brand</td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div>
    


@endsection