<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hikari Demo Web</title>
        @vite('resources/css/app.css')
    </head>
<body>
    <div id="app">

        @include('includes.header')

        @yield('content')

        @include('includes.footer')
    </div>

    @stack('after-scripts')
</body>
</html>
