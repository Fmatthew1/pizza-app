@extends('Layouts.app')

@section('content')
    <div class="container">
        <h2>Permission Management</h2>
     
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Permission</div>

                    <div class="card-body">
                        <form method="POST" action="/permissions">
                        @csrf
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="role_permission">Add Permissions</label>
                                <input type="text" id="role_permission" class="form-control" name="role_permission" value={{old( 'role_permission' )}}>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="description">Description</label>
                                <input type="text" id="description" class="form-control" name="description" value={{old( 'description' )}}>
                            </div>

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
