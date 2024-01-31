@extends('Layouts.app')

@section('content')
    <h1>Create New User</h1>
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <form action="/users" method="POST">
    @csrf
        <div class="mb-2">
        <label for="name" class="form-label">New User</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="User Name" value= "{{old('name')}}">
        </div><div class="mb-2">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value= "{{old('email')}}">
        </div>
        </div><div class="mb-2">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        </div><div class="mb-2">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
        </div>
        <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit" value="submit">Submit</button>
        </div>
    </form>
@endsection