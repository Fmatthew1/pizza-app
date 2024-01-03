@extends('Layouts.layout')

@section('content')

        <form action="/services/store" method="POST">
            @csrf
            <label for="description">Description of Service</label>
            <input type="text" id="description" name="description">
            <button type="submit" value="submit">Submit</button>
        </form>

@endsection