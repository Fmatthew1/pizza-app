@extends('Layouts.layout')

@section('content')
<h1>Services List</h1>
        <div class="wrapper-pizza-index">
            @foreach($services as $service)
                <div class="pizza-item">
                    <h4><a href="/services{{ $service->id}}">{{ $service->description }}</a></h4>
                </div>
            @endforeach
        </div>
    <p class="messg">{{ session('messg') }}</p>
@endsection