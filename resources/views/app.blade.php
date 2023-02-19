<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}" />
        <script src="{{ asset('assets/script.js') }}" defer></script>

         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">
        <link href="{{ asset('assets/css/boxicons.min.css') }}" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/components.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/profile.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/media.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/chat.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/settings.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/forms.css') }}" rel="stylesheet">
        <link href="https://vjs.zencdn.net/7.4.1/video-js.css') }}" rel="stylesheet">
        <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/load.js') }}" type="text/javascript"></script>

        <!-- Core -->
        <script src="{{ asset('assets/js/jquery/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
        <!-- Optional -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <script type="text/javascript">
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });

        </script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="{{ asset('assets/js/components/components.js') }}"></script>

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
