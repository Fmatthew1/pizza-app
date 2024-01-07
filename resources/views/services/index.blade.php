@extends('Layouts.app')
s
@section('content')
    <h1>List of Services</h1>
    <button type="button" class="btn btn-outline-success">
        <a href="/services/create">Create</a>
    </button>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>
                        {{ $service->description }}
                    </td>
                    <td>
                        <button type="button" class="btn btn-info">
                            <a href="/services/{{ $service->id }}">View</a>
                        </button>
                        <button type="button" class="btn btn-warning">
                            <a href="/services/{{ $service->id}}/edit">Update</a>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p class="messg">{{ session('messg') }}</p>
@endsection