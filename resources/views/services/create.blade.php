@extends('Layouts.app')

@section('content')
    <h1>Description of Services</h1>
    <form action="/services" method="POST">
    @csrf
        <div class="mb-2">
        <label for="description" class="form-label">Description of Services</label>
       
        <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit" value="submit">Submit</button>
        <button type="button" class="btn btn-outline-primary">
        <a href="/services/{{ $service->id }}" class="">Update A Service</a>
        </button>
        </div>
    </form>
@endsection