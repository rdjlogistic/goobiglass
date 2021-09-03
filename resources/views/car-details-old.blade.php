<html>

<head>
    <title>

    </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
        #jsv-holder {
            width: auto;
        }

        #jsv-holder img {
            width: 100%;
        }

        :root {
            --car-color: #41daf9;
        }

        img {
            max-width: 100% !important;
            height: auto !important;
        }

        .car-wrap {
            max-width: 600px;
            width: 80%;
            margin: 0 auto;
            line-height: 0;
            background: var(--car-color);
        }

        .car-color-picker {
            color: var(--car-color);
        }


        *,
        *:before,
        *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        /* body {
            font-family: 'Fredoka One', sans-serif;
            display: flex;
            flex-wrap: wrap;
            min-height: 100vh;
            width: 100vw;
            justify-content: center;
            align-items: center;
            line-height: 1.5;
        } */

        .feature-wrap {
            text-align: center;
        }

        .blended {
            background-color: var(--car-color) !important;
            background-blend-mode: multiply;
        }

        .colorSquare {
            width: 30px;
            height: 30px;

        }
    </style>

    <script defer src="https://cdn.jsdelivr.net/npm/@3dweb/360javascriptviewer/lib/JavascriptViewer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="row">
        <div class="col-md-8">
            <div id="jsv-holder" class="car-wrap blended">
                <img id="jsv-image" alt="your 360 images" src="{{asset('images/cars/1.png') }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="row" id="colorPicker">

            </div>
        </div>
    </div>

</body>
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

</html>
