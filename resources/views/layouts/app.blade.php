    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">

        <style>
            body{
                font-family: 'Raleway', sans-serif;
            }

            .marquee {
                width: 100%;
                margin: 0 auto;
                overflow: hidden;
                white-space: nowrap;
            }
            .marquee span {
                font-size: 16px;
                position: relative;
                left: 100%;
                --offset: 20vw;
                animation: marquee 30s linear infinite;
            }
            .marquee:hover span {
            animation-play-state: paused;
            }
            .marquee span:nth-child(1) {
            animation-delay: 0.0s;
            }
            .marquee span:nth-child(2) {
            animation-delay: 0.5s;
            }
            .marquee span:nth-child(3) {
            animation-delay: 1.0s;
            }
            .marquee span:nth-child(4) {
            animation-delay: 1.5s;
            }
            .marquee span:nth-child(5) {
            animation-delay: 2.0s;
            }
            .marquee span:nth-child(6) {
            animation-delay: 2.5s;
            }
            .marquee span:nth-child(7) {
            animation-delay: 3s;
            }
            @keyframes marquee {
            0%   { left: 130%; }
            100% { left: -130%; }
            }

        </style>
    </head>
    <body class="bg-white">
        <div id="app">
            <nav class="navbar navbar-expand-md shadow-sm bg-brown">
                <div class="container">  
                    <div class="container-fluid">
                        <a class="navbar-brand me-5 ms-sm-2" href="/">
                            <img src="img/logo_las_cruces.png" alt="" width="80" height="80" class="d-inline-block align-text-top">
                        </a>
                        <button class="navbar-toggler border-light btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <p class="text-white">MENÚ</p>
                        </button>
                        <div class="collapse navbar-collapse ms-sm-5 text-center" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active text-light" aria-current="page" href="/">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="galeria">Galería</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Servicios
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="comida">Menú</a></li>
                                    <li><a class="dropdown-item" href="servicios">Servicios</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Políticas
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="recomendaciones_y_compromisos">Compromisos</a></li>
                                    <li><a class="dropdown-item" href="recomendaciones_y_compromisos">Recomendaciones</a></li>
                                    <li><a class="dropdown-item" href="FAQ">FAQ</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="acerca_de">Acerca de</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="contacto">Contacto</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Reservar
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="datos-reservarcion">Reservar visita</a></li>
                                    <li><a class="dropdown-item" href="cabañas">Reservar cabaña</a></li>
                                    </ul>
                                </li>
                                <!--<li class="nav-item">
                                    <a class="nav-link text-light" href="datos-reservarcion">Reservar</a>
                                </li>-->
                            </ul>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <!--<li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                    </li>
                                @endif-->
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('home') }}">{{ __('Dashboard') }}</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
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
            <section>
                <div class="avisos bg-cdark">
                    <div class="row h-100 mw-100 d-flex justify-content-center">
                        <div class="col-sm-4 bg-cdark d-flex flex-column justify-content-center align-items-center w-100">
                            <p class="ms-3 mt-3 fw-bolder me-2"> Servicio previa reservación - De 9 am a 4 pm</p>
                        </div>
                        <div class="col-sm-8 d-flex justify-content-center align-items-center w-75">
                            <p class="mt-3"> <marquee direction="left" class="w-100" scrolldelay=160>No se permite la entrada con alimentos o bebidas. </marquee></p>
                        </div>
                    </div>
                </div>
            </section>
            <!--<section>
                <div class="avisos bg-cdark">
                    <div class="row h-100 mw-100 d-flex justify-content-center">
                        <div class="col-sm-10 d-flex justify-content-center align-items-center w-75">
                            <p class="marquee">
                                <span>&nbsp;</span>
                                <span>Horario de Servicio: Sábados y Domingos 9 am a 4 pm </span>
                                <span>&nbsp;</span>
                                <span>Servicio previa reservación</span>
                                <span>&nbsp;</span>
                                <span>No se permite la entrada con alimentos o bebidas.</span>                                  
                            </p>
                        </div>
                    </div>
                </div>
            </section>-->
            <main class="py-0">
                @yield('content')
            </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/b6a0ace850.js"></script>
    </body>
    </html>
