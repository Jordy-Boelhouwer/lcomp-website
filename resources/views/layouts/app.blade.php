<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >

    <title>@yield('title')</title>
</head>
<body>
@include('partials/navbar')

@yield('content')

<!-- JS -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="http://islpronto.islonline.net/live/islpronto/public/chat.js?d=http://127.0.0.1:8000"></script>
</body>
</html>