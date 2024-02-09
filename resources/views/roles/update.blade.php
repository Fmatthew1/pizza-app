@extends('Layouts.app')

@section('content')
    <div class="container">
        <h2>Role Update Management</h2>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="float-end">
            <a href="{{ route('roles.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update New Role</div>

                    <div class="card-body">
                        <form method="POST" action="/roles/{{ $role->id }}">
                        @csrf
                        @method('PUT')
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Role Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $role->name}}">
                                </div>

                            </div>

                                <label class="col-md-4 col-form-label text-md-right" for="permission_role">Add Permissions</label>
                             
                                    @foreach ($permissions as $permission)
                                    <div class="form-group row">
                                    <div class="form-check">
                                        <input type="checkbox" value="{{ $permission->id }}" class="form-check-input" id="permission_{{ $permission->id }}" name="permissions[]">
                                        <label class="form-check-label" for="permission_{{ $permission->id }}">
                                            {{ $permission->name }}
                                        </label>
                                    </div>
                                    </div>
                                    @endforeach
                                    @if ($errors->has('permissions'))
                                        <span class="text-danger">{{ $errors->first('permissions') }}</span>
                                    @endif

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update Role
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
