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
</head>

<body>
    <div id="app">
        @include('includes.header')
        <main class="goobiglass-main">
            @yield('content')
        </main>
        @include('includes.footer')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@3dweb/360javascriptviewer/lib/JavascriptViewer.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <script src="{{ asset('plugins/aos/aos.js') }}"></script>
    <script type="text/javascript">
        AOS.init({once:'true'});
    </script>
    <script>
        var header = $(".goobi-header-wrapper");
            $(this).scrollTop(0);
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll >= 100) {
                    header.addClass("goobi-scroll-header");
                } else {
                    header.removeClass("goobi-scroll-header");
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
    <script type="application/javascript">
        var jsv;
    window.addEventListener('load', () => {
        jvs();
    });

    var colorCode = ['#c1324a','#be3501','#b62901','#94274a','#601d2e','#f6daa0','#fcc598','#f2b100','#ff9100','#f47f00','#fe6901','#f6dae4','#fdc5db','#ffa5c8','#ff94c3','#f978a6','#fe66a2','#fe629c','#fe9684','#f78474'];
    var html = '';
    for (const key in colorCode) {
        if (Object.hasOwnProperty.call(colorCode, key)) {
            const element = colorCode[key];
            html += "<div class='col-md-2 mb-3'><div class='colorSquare' onclick='changeColor(\"" + element + "\")' style='background-color:"+ element+"'></div></div>";
        }
    }
    $('#colorPicker').html(html);

    let root = document.documentElement;
    let carWrap = document.getElementById('jsv-holder');
    let colorPicker = document.getElementById('color-picker');

    colorPicker.addEventListener('change', function (e) {
        root.style.setProperty('--car-color', this.value);
        jvs();
    });

        function changeColor(color){
            root.style.setProperty('--car-color', color);
           // jvs();
        }

    function jvs() {
        $("#jsv-holder").children().not(':first').remove();
        jsv = new JavascriptViewer({
            mainHolderId: 'jsv-holder',
            mainImageId: 'jsv-image',
            imageUrlFormat: 'xx.png',
            totalFrames: 36,
            defaultProgressBar: true,
            speed: 90,
            inertia: 50,
            reverse: true,
            zoom: true,
            autoRotate: 1,
            notificationConfig: {
                dragToRotate: {
                    showStartToRotateDefaultNotification: true,
                    mainColor: "rgba(0,0,0,0.20)",
                    textColor: "rgba(243,237,237,0.80)",
                }
            }
        })
        jsv.start()
            .then(() => console.log('viewer started'))
            .catch((e) => console.log('failed loading 360 viewer: ' + e))
    }
    </script>

</body>

</html>
