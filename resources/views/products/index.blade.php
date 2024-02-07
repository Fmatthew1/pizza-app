@extends('Layouts.app')

@section('content')

<h2>Product Management</h2>
<button type="button" class="btn btn-outline-success">
    <a href="/products/create">Create Products</a>
</button>
<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{ $loop->index + 1 }}</th>
                <td>
                    {{ $product->name }}
                </td>
                <td>
                    {{ $product->price }}
                </td>
                <td>
                    {{ $product->description }}
                </td>
                <td>
                    <button type="button" class="btn btn-info">
                        <a href="/products/{{ $product->id }}">View</a>
                    </button>
                    <button type="button" class="btn btn-warning">
                        <a href="/products/{{ $product->id}}/edit">Update</a>
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<p class="messg">{{ session('messg') }}</p>


@endsection

