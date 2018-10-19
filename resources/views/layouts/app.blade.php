<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >

    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
    <script>
        window.addEventListener("load", function(){
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#237afc"
                    },
                    "button": {
                        "background": "#fff",
                        "text": "#237afc"
                    }
                },
                "theme": "classic",
                "position": "bottom-right",
                "content": {
                    "message": "@lang('common.cookie-message')",
                    "dismiss": "Verberg deze melding",
                    "link": "Cookies",
                    "href": "{{ route('information.privacy') }}"
                }
            })});
    </script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
@include('partials/navbar')

@yield('content')

<!-- JS -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="http://islpronto.islonline.net/live/islpronto/public/chat.js?d=http://127.0.0.1:8000"></script>
</body>
</html>