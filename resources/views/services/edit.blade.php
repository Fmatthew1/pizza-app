@extends('Layouts.layout')

@section('content')

        <form action="/services/1/edit" method="POST">
            @csrf
            <label for="description">Update Services</label>
            <input type="text" id="description" name="description" value="{{ $service->description}}">
            <button type="submit" value="submit">Save</button>
        </form>

@endsection