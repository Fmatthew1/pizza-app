@extends('Layouts.app')

@section('content')

<h2>Users Management</h2>
<button type="button" class="btn btn-outline-success">
    <a href="/users/create">Create New user</a>
</button>
<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Roles</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{ $loop->index + 1 }}</th>
                <td>
                    {{ $user->name }}
                </td>
                <td>
                    {{ $user->email }}
                </td>
                <td>
                    @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                    <label> {{ $v }} </label>
                    @endforeach
                    @endif
                </td>
                <td>
                    <button type="button" class="btn btn-info">
                        <a href="/users/{{ $user->id }}">View</a>
                    </button>
                    <button type="button" class="btn btn-warning">
                        <a href="/users/{{ $user->id}}/edit">Update</a>
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<p class="messg">{{ session('messg') }}</p>



@endsection