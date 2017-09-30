<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107314429-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments)};
            gtag('js', new Date());

            gtag('config', 'UA-107314429-1');
        </script>

        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href = "{{ asset('/css/bulma.css') }}">
        <link rel = "stylesheet" href = "{{ asset('/css/palette.css') }}">
        <link rel = "stylesheet" href = "{{ asset('/css/header.css') }}">
        @yield('styles')
    </head>
    <body>
        @include('partials.header')

        @yield('content')


        <script src = "{{ asset('/js/header.js') }}"></script>
        @yield('scripts')

        @include('partials.footer')
    </body>
</html>