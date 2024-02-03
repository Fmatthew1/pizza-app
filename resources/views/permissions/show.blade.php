@extends('Layouts.app')

@section('content')

         <div class="wrapper-pizza-detals">
            <h1>Show A Single Permission</h1>
            <p>{{ $role->name }}</p>
            <p>{{ $role->description }}</p>
            <a href="/permissions" class="back">Back To All Permissions</a>
         </div>
         
@endsection