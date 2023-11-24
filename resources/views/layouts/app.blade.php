<head>
    <link rel="shortcut icon" type="image/png" href="{{ asset('logo.ico') }}">
</head>

<nav>
    <div>
        <header>
            <div class="toggle">
                <i style="color: white" class="fa-solid fa-bars open"></i>
            </div>
            <a href="/"><img class="logo" src="{{ asset('img/task.png') }}" alt="logo"></a>
            <nav class="">
                <div class="menus">
                    <ul>
                        <li><a href="/"><i class="fa-solid fa-house"></i>Inicio</a></li>
                        @if (Auth::check())
                        <li><a href="calendar/index"><i class="fa-solid fa-calendar"></i>Calendario</a></li>
                        @else
                        <li><a href="/"><i class="fa-solid fa-calendar"></i>Calendario</a></li>
                        @endif
                        @if (Auth::check())
                            <li><a href="/"><i class="fa-solid fa-user-check"></i>{{ Auth::user()->name }}</a></li>
                            <form action="{{ route('logout') }}" method="GET">
                                <button type="submit">Sair</button>
                            </form>
                        @else
                            <li><a href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket"></i></i>Login</a></li>
                        @endif
                    </ul>
                </div>
            </nav>
        </header>

        <script>
            $(document).ready(function(){
                $('.toggle').click(function(){
                    $('nav').toggleClass('active')
                })
            })
        </script>
    </div>