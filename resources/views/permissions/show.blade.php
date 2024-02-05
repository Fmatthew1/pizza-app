@extends('Layouts.app')

@section('content')

         <div class="wrapper-pizza-detals">
            <h1>Show A Single Permission</h1>
            <p>{{ $permission->name }}</p>
            <p>{{ $permission->description }}</p>
            <a href="/permissions" class="back">Back To All Permissions</a>
         </div>
         
@endsection