@extends('Layouts.app')

@section('content')
    <div class="container">
        <h2>Role Management</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Role</div>

                    <div class="card-body">
                        <form method="POST" action="/roles">
                        @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Role Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                                </div>

                            </div>

                            <label class="col-md-4 col-form-label text-md-right" for="permission_role">Add Permissions</label>
                            @foreach($permissions as $permission)
                                <div class="form-group row">
                                    <div class="form-check">
                                        <input type="checkbox" value="{{ $permission->id }}" class="form-check-input" id="permissions_{{ $permission->id }}" name="permissions[]">
                                        <label class="form-check-label" for="permissions_{{ $permission->id }}">
                                            {{ $permission->name }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
