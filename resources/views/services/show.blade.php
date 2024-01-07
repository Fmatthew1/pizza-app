@extends('Layouts.app')

@section('content')

   <div class="wrapper-pizza-detals">
        <h1>Description of Services</h1>
        <p>{{ $service->description }}</p>
   </div>
   <form action="{{ route('services.destroy', $service->id) }}" method="POST">
    @csrf 
    @method('DELETE')
    <button type="submit" value="submit">Delete A Service</button>
   </form>
   <a href="/services" class="back">Back To All Services</a>

@endsection