<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>{{ $title ?? config('app.name', 'San Isidro Salud') }}</title>

    <!-- Styles -->
    <link href="{{ url('./resources/css/bootstrap.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ url('./resources/css/style.css') }}" type="text/css" rel="stylesheet">

    <!-- Scripts -->
    <script defer src="{{ url('./resources/js/bootstrap.bundle.js') }}" type="text/javascript"></script>

    <!-- Fonts -->
</head>

<body>
    <div id="app">
        <nav class="navbar">
            <a class="navbar-logo" href="{{ route('home') }}">
                <img src="{{ url('./resources/img/logo-003466.jpg') }}" alt="San Isidro">
            </a>
            <a class="navbar-brand" href="{{ route('home') }}">
                <h1>Clínica San Isidro</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="{{ __('Toggle navigation') }}">
                <img src="{{ url('./resources/img/white-menu.png') }}" alt="Menú">
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            {{-- <div class="under-white-a"></div>
            <div class="under-white-b"></div> --}}
                <div class="offcanvas-header">
                    <h2 class="offcanvas-title" id="offcanvasNavbarLabel">San Isidro</h2>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                        <a class="nav-link" href="#"><li class="nav-item">Turnos</li></a>
                        <a class="nav-link" href="#"><li class="nav-item">Recetas</li></a>
                        <a class="nav-link" href="#"><li class="nav-item">Especialidades</li></a>
                        <a class="nav-link" href="#"><li class="nav-item">Contacto</li></a>
                        <a class="nav-link" href="#"><li class="nav-item">Quienes somos</li></a>
                        <a class="nav-link" href="./post"><li class="nav-item">Uso interno</li></a>
                    </ul>
                </div>
            </div>
        </nav>
        {{ $slot }}
        <footer>
            <div id="upper-stripe"></div>
            <span id="footer-text">&copy;San Isidro S.A. - Jesús María, Córdoba, Argentina - 2024 maildeejemplo@gmail.com - <div id="phone-footer">(+54) 011 385 4392</div></span>
        </footer>
    </div>
</body>

</html>
