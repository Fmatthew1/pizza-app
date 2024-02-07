@extends('Layouts.app')

@section('content')
    <h1>Create New product</h1>
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <form action="{{ route('products.store') }}" method="POST">
    @csrf
        <div class="mb-2">
        <label for="name" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Product Name" value= "{{old('name')}}">
        </div><div class="mb-2">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Price" value= "{{old('price')}}">
        </div>
        </div><div class="mb-2">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Description" value= "{{old('description')}}">
        </div>
        <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit" value="submit">Submit</button>
        </div>
    </form>
@endsection