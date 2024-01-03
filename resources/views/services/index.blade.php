@extends('Layouts.layout')

@section('content')

<table class="table display compact data-table">
                            <thead>
                                @foreach($services as $service)
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Diesel</td>
                                    <td>11000</td>
                                    <td>Buy from recognized dealer</td>
                                </tr>
                                <tr>
                                    <td>Machine Parts</td>
                                    <td>3000</td>
                                    <td>Buy the original parts</td>
                                </tr>
                                <tr>
                                    <td>Auto-mobile</td>
                                    <td>44000</td>
                                    <td>purchase the original brand</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>


@endsection