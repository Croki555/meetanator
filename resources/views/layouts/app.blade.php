<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/bootstrap.css', 'resources/css/cover.css'])
    @yield('headScripts')
</head>
<style>
    body {
        height: 100%;
        overflow-y: scroll;
    }

    body::-webkit-scrollbar {
        width: 4px;
    }

    body::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    }

    body::-webkit-scrollbar-thumb {
        background-color: darkgrey;
        outline: 1px solid slategrey;
    }
    /* End Scroll Bar */
</style>
<body class="text-bg-dark" id="main">
    @if(isset($header))
        @include('partials.header')
    @endif
    @yield('main')
    <main>
        @yield('about-us')
        @yield('about-system')
    </main>
    @if(isset($footer))
        @include('partials.footer')
    @endif
@vite(['resources/js/bootstrap.bundle.js', 'resources/js/jquery.js'])
</body>
</html>
