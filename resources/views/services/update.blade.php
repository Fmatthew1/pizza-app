@extends('Layouts.app')

@section('content')
            <h1>Update Services</h1>
            
        <form action="/services/{{ $service->id }}" method="post">
            @csrf
            @method('put')
            <form>
            <div>
                <label for="description">Update Services</label>
            </div>
            
                <input type="text" id="description" name="description" value="{{ $service->description }}">
        
            <button type="submit" class="btn btn-success">Update</button>
            <div >
                <a href="/services" class="back"><button class="btn btn-primary me-md-2" type="button">Go to Services</button></a>
            </div>
            </form>
            @if ($errors->any())
            <div class="alert alert-danger">
                
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
            
            </div>
            @endif
        </form>

@endsection