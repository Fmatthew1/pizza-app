@extends('Layouts.app')

@section('content')

         <div class="wrapper-pizza-detals">
            <h1>Show A Single User</h1>
            <p>{{ $user->name }}</p>
         </div>
         <form action="{{ route('users.destroy', $user->id) }}" method="POST">
         @csrf 
         @method('DELETE')
         <button type="submit" value="submit">Delete A User</button>
         </form>
         <a href="/users" class="back">Back To All Users</a>

@endsection