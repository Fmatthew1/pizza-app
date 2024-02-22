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
                           
                            <div class="d-flex flex-column justify-content-center">
                                
                                <div class="col-md-6 g-3 align-items-center">
                                    <div class="col-auto">
                                        <label for="name" class="col-form-label">Name</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="name" class="form-control" name="name" value="{{ $permission->name}}">
                                    </div>
                                </div>

                                <div class="col-md-6 g-3 align-items-center">
                                    <div class="col-auto">
                                        <label for="description" class="col-form-label">Description</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="description" class="form-control" name="description" value="{{ $permission->description }}">
                                    </div>
                                </div>
                              
                                <div class="col-md-6 g-3 align-items-center ml-3">
                                
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
