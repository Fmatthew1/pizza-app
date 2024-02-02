@extends('Layouts.app')

@section('content')

         <div class="wrapper-pizza-detals">
            <h1>Show A Single Role</h1>
            <p>{{ $role->name }}</p>
            <a href="/roles" class="back">Back To All Roles</a>
         </div>
         
@endsection