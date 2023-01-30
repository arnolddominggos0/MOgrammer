<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kuis</title>

    @viteReactRefresh
    @vite('resources/js/kuisapp.jsx')


    <!--Favicons-->
    <link rel="icon" type="image/png" sizes="" href="{{ asset('assets/img/gallery/logoMogrammer1.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.icon') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <!--Stylesheets-->
    <!-- <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" /> -->
</head>
<body>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
    </form>

    <script>
        window.user = "{{Auth::user() ? Auth::user()->name : null}}";
        window.user_id = "{{Auth::user() ? Auth::user()->id : null}}";
    </script>
    <div id="kuisapp"></div>

    <!--JavaScripts-->
    <script src="{{ asset('vendors/@popperjs/popper.min.js')}}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset('vendors/is/is.min.js')}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{ asset('assets/js/theme.js')}}"></script>

    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
</body>

</html>