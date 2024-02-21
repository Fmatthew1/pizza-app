@extends('Layouts.app')

@section('content')
    <div class="container">
        <h2>Permission Management</h2>
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
                    <div class="card-header">Create New Permission</div>

                    <div class="card-body">
                        <form method="POST" action="/permissions">
                        @csrf
                        
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="name">Add Permissions</label>

                                <div class="col-md-6">
                                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value={{ 'name' }}>
                                </div>
                                <label class="col-md-4 col-form-label text-md-right" for="description">Description</label>
                                <div class="col-md-6">
                                <input type="text" id="description" class="form-control @error('description') is-invalid @enderror" name="description" value={{'description' }}>
                                </div>
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
