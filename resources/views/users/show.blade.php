@extends('Layouts.app')

@section('content')

   <div class="wrapper-pizza-detals">
      <h1>Show A Single User</h1>
      <p>{{ $user->name }}</p>
      <p>{{ $user->email }}</p>
      <p>{{ $user->role_id }}</p>
      
      <a href="/users" class="back">Back To All Users</a>
   </div>

@endsection