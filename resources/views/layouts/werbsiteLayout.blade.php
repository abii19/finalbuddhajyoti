<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title')
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href={{asset("css/style.css")}} />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">

    {{--Index-css Styles--}}
    <link rel="stylesheet" type="text/css" href={{asset("css/index-css/header-top.css")}} />
    <link rel="stylesheet" type="text/css" href={{asset("css/index-css/teacher-desk.css")}} />
    <link rel="stylesheet" type="text/css" href={{asset("css/index-css/message-desk.css")}} />
    <link rel="stylesheet" type="text/css" href={{asset("css/index-css/awards-desk.css")}} />
    <link rel="stylesheet" type="text/css" href={{asset("css/index-css/testonomial-desk.css")}} />
    <link rel="stylesheet" type="text/css" href={{asset("css/index-css/event-desk.css")}} />
    <link rel="stylesheet" type="text/css" href={{asset("css/index-css/teacher-desk.css")}} />
    <link rel="stylesheet" type="text/css" href={{asset("css/index-css/footer-desk.css")}} />

    @yield('style')
</head>
<body>
@yield('content')
</body>
<script src="/js/app.js"></script>
@yield('scripts')

</html>


