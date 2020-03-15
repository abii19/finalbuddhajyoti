<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title', 'Buddha Jyoti')
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        /**, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
*/
        body {
            font-family: Roboto, sans-serif;
            font-size: 15px;
            -webkit-font-smoothing: antialiased;
            color: #222629;
            letter-spacing: .02em;
            line-height: 20px;
        }

        .ex-large-900 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 900;
            font-size: 50px !important;
            line-height: 50px !important;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .ex-large-800 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 45px !important;
            line-height: 45px !important;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .large-700 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 25px !important;
            line-height: 30px !important;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .title-top {
            font-family: 'Montserrat', sans-serif;
            font-size: 35px !important;
            line-height: 40px !important;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .bg-base-color {
            background-color: #f9461d;
            border-radius: 2px;
            border: none;
        }

        .separator-line {
            width: 30%;
            height: 8px;
            margin-top: 5px;
        }

        .text-center {
            text-align: center !important;
        }

    </style>
    @yield('style')
</head>
<body>
    @yield('content')
</body>
@yield('scripts')

</html>

