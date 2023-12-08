
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

                    <!-- @for($i = 0; $i < count($pizzas); $i++)
                        <p>{{ $pizzas[$i]['type'] }}</p>
                    @endfor -->

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

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
