@extends('Layouts.app')

@section('content')
    <h1>List of Permissions</h1>
    {{-- <button type="button" class="btn btn-outline-success">
        <a href="/permissions/create">Create New Permission</a>
    </button> --}}
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($permissions as $permission)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>
                        {{ $permission->name }}
                    </td>
                    <td>
                        {{ $permission->description }}
                    </td>
                    <td>
                        <button type="button" class="btn btn-info">
                            <a href="/permissions/{{ $permission->id }}">View</a>
                        </button>
                        {{-- <button type="button" class="btn btn-warning">
                            <a href="/permissions/{{ $permission->id}}/edit">Update</a>
                        </button> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p class="messg">{{ session('messg') }}</p>
@endsection