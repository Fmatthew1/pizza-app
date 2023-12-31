@extends('Layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="/img/pizza.jpg" alt="pizza House">
                <div class="title m-b-md">
                    The South Best Pizzas
                </div>
                <p class="messg">{{ session('messg') }}</p>
                <a href="{{ route('pizzas.create') }}">Order A Pizza</a>
            </div>
        </div>
@endsection

