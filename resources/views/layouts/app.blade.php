<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles
    </head>
    <body>
        @yield('content')

        <script src="{{ asset('js/app.js') }}"></script>
        @livewireScripts
    </body>
</html>
