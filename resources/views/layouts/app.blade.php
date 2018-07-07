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
</body>
</html>