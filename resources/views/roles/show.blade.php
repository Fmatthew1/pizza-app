@extends('Layouts.app')

@section('content')

         <div class="wrapper-pizza-detals">
            <h1>Show A Single Role</h1>
            <p>{{ $role->name }}</p>
         </div>
         <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
         @csrf 
         @method('DELETE')
         <button type="submit" value="submit">Delete A Role</button>
         </form>
         <a href="/roles" class="back">Back To All Roles</a>

@endsection