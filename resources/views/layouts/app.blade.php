<html>
    <head>
        <link rel="stylesheet" href="{{ asset('app.css') }}">
        @livewireStyles
    </head>
    <body>
        @yield('content')

        <script src="{{ asset('app.js') }}"></script>
        @livewireScripts
    </body>
</html>
