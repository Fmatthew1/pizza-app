@extends('Layouts.app')

@section('content')
    <h1>List of Roles</h1>
    <button type="button" class="btn btn-outline-success">
        <a href="/roles/create">Create New Role</a>
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
            @foreach($roles as $role)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>
                        {{ $role->name }}
                    </td>
                    <td>
                        <button type="button" class="btn btn-info">
                            <a href="/roles/{{ $role->id }}">View</a>
                        </button>
                        <button type="button" class="btn btn-warning">
                            <a href="/roles/{{ $role->id}}/edit">Update</a>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p class="messg">{{ session('messg') }}</p>
@endsection