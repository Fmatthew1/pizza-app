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
                <div class="title m-b-md">
                    Pizza List 
                </div>

                <p>{{ $name }}</p>
                <p>{{ $age }}</p>


                    @foreach($pizzas as $pizza)
                        <div>
                          {{$loop->index}}  {{$pizza['type']}} - {{ $pizza['base']}}
                          @if($loop->first)
                            <span> - First in the loop</span>
                            @endif
                            @if($loop->last)
                                <span> - Last in the loop</span>
                            @endif
                        </div>
                    @endforeach

            </div>
        </div>
    @endsection

