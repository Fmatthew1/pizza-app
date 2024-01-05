@extends('Layouts.layout')

@section('content')

   <div class="wrapper-pizza-detals">
        <h1>Service Description</h1>
        <p>{{ $service->description }}</p>
   </div>
   <form action="/services/{{ $service->id }}" method="POST">
    @csrf 
    @method('DELETE')
    <button type="submit" value="submit">Remove A Service</button>
   </form>
   <a href="/services" class="back">Back To All Services</a>

@endsection