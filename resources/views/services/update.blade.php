@extends('Layouts.app')

@section('content')
            <h1>Update Services</h1>
        <form action="/services/{{ $service->id }}" method="post">
            @csrf
            @method('put')
            <label for="description">Update Services</label>
            <input type="text" id="description" name="description" value="{{ $service->description }}">
            <button type="submit">Save</button>
        </form>

@endsection