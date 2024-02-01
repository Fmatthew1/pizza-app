@extends('Layouts.app')

@section('content')

   <div class="wrapper-pizza-detals">
      <h1>Show A Single User</h1>
      <p>{{ $user->name }}</p>
      <a href="/users" class="back">Back To All Users</a>
   </div>

@endsection