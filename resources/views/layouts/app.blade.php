<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/stylesheet.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css')."?version=". env("APP_CSS_VERSION", 1) }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        @include('includes.header')
        <main class="goobiglass-main">
            @yield('content')
        </main>
        @include('includes.footer')
    </div>
    <script src="{{ asset('js/app.js')."?version=". env("APP_JS_VERSION", 1) }}"></script>
    <script src="{{ asset('plugins/aos/aos.js') }}"></script>

    
    <script type="text/javascript">
        AOS.init({once:'true'});
    </script>
    <script>
        var header = $(".coaq-header-wrapper");
            $(this).scrollTop(0);
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll >= 100) {
                    header.addClass("coaq-scroll-header");
                } else {
                    header.removeClass("coaq-scroll-header");
                }
            });
            $(document).ready(function(){
                $(".navbar-toggler").click(function(){
                    var nav_button = $(this).attr('aria-expanded')
                    if(nav_button == "true") {
                        document.body.classList.remove("open-toggler-menu")
                    } else {
                        document.body.classList.add("open-toggler-menu")
                    }
                });
            });
    </script>
   
</body>

</html>
