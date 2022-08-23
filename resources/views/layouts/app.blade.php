<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lili's Shoes</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Raleway:wght@400;800;900&family=Roboto:wght@900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navegacion-tamplate navbar navbar-expand-md navbar-light bg-primario shadow-sm fm-raleway">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="img/IconBar.svg" class="img-barra-principal">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto row">
                        <!-- Authentication Links -->

                        <li class="nav-item col text-center">

                            <a href="{{ route('/') }}" class="nav-link">Inicio</a>

                        </li>
                        <li class="nav-item col text-center">

                            <a href="{{ route('nosotros') }}" class="nav-link">Nosotros</a>

                        </li>
                        <li class="nav-item col text-center">

                            <a href="servicios.php" class="nav-link">Servicios</a>

                        </li>
                        <li class="nav-item col text-center">

                            <a href="productos.php" class="nav-link">Productos</a>

                        </li>
                        <li class="nav-item col text-center">

                            <a href="contacto.php" class="nav-link">Contacto</a>

                        </li>
                        <li class="nav-item col text-center">

                            <a href="galeria.php" class="nav-link">Galeria</a>

                        </li>

                        @guest

                            @if (Route::has('login'))
                                <li class="nav-item col text-center col">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item col text-center col">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif

                        @else
                            <li class="nav-item dropdown text-center col">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end text-center bg-red" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item color-primario" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <div class="row">
            <p class="flooter-sitio m-0 p-2 text-center col">Todos los derechos reservados &copy <span class="footer-brand">Lili's Shoes</span> 2022</p>
        </div>
    </div>
</body>
</html>
