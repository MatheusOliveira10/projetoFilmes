<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <style>
        body {
            background-color: #16213e !important;
            color: '#fff' !important
        }

        .ui.menu .item img.logo {
            margin-right: 1.5em;
        }

        strong {
            color: #fff !important;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>

<body>
    <div class="ui fixed inverted menu" style="background-color: #1a1a2e">
        <div class="ui container">
            <a href="#" class="header item">
                Projeto Filmes
            </a>
            @guest
            <a href="{{ route('login') }}" class="item">Login</a>
            <a href="{{ route('register') }}" class="item">Registrar</a>
            @else
            <div class="ui simple dropdown item right aligned">
                {{ Auth::user()->name }}<i class="dropdown icon"></i>
                <div class="menu">
                    <a class="item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                        @csrf
                    </form>
                </div>
            </div>
            @endguest
        </div>
    </div>

    <div class="ui main container" style="margin-top: 5em">
        <div class="ui inverted header">
            @yield('title')
        </div>

        @yield('content')
    </div>
</body>

</html>