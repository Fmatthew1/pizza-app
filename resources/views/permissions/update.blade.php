@extends('Layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Permissions</h2>
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
            <a href="{{ route('permissions.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update New Permission</div>

                    <div class="card-body">
                        <form method="POST" action="/permissions/{{ $permission->id }}">
                        @csrf
                        @method('PUT')
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $permission->name}}">
                                </div>
                                <div class="col-md-6">
                                    <input id="decription" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $permission->description}}">
                                </div>

                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update Permission
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
