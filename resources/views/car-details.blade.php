@extends('layouts.app')
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
@section('content')
<section class="goobi-cardetails-wrapper">
    <div class="goobi-cardetails-details">
        <div class="goobi-car-view-block">
            {{-- <div id="jsv-holder" class="car-wrap blended">
                <img id="jsv-image" alt="your 360 images" src="{{asset('images/cars/1.png') }}">
        </div> --}}
        <div class="goobi-car-view-img car-wrap blended" id="jsv-holder">
            <img id="jsv-image" src="{{asset('images/cars/bmw/01.png') }}" alt="">
        </div>
    </div>
    <div class="goobi-car-color-category">
        {{-- <h3 class="vehicle-page-title">Choose your vehicle color</h3>
        <div class="goobi-choose-vehicle-color-block">
            <div class="goobi-choose-vehicle-color">
                <div class="creafix">
                    <div class="goobi-vehicle-color-img">
                        <img src="{{asset('images/vedicle-white-img.png') }}" alt="">
    </div>
    </div>
    <div class="goobi-vehicle-color-details">
        <h4>Alpine White</h4>
        <p>$15</p>
    </div>
    </div>
    <div class="goobi-choose-vehicle-color">
        <div class="creafix">
            <div class="goobi-vehicle-color-img">
                <img src="{{asset('images/vedicle-black-img.png') }}" alt="">
            </div>
        </div>
        <div class="goobi-vehicle-color-details">
            <h4>Jet Black</h4>
            <p>$15</p>
        </div>
    </div>
    <div class="goobi-choose-vehicle-color">
        <div class="creafix">
            <div class="goobi-vehicle-color-img">
                <img src="{{asset('images/vedicle-white-img.png') }}" alt="">
            </div>
        </div>
        <div class="goobi-vehicle-color-details">
            <h4>Alpine White</h4>
            <p>$15</p>
        </div>
    </div>
    <div class="goobi-choose-vehicle-color">
        <div class="creafix">
            <div class="goobi-vehicle-color-img">
                <img src="{{asset('images/vedicle-black-img.png') }}" alt="">
            </div>
        </div>
        <div class="goobi-vehicle-color-details">
            <h4>Jet Black</h4>
            <p>$15</p>
        </div>
    </div>
    <div class="goobi-choose-vehicle-color">
        <div class="creafix">
            <div class="goobi-vehicle-color-img">
                <img src="{{asset('images/vedicle-white-img.png') }}" alt="">
            </div>
        </div>
        <div class="goobi-vehicle-color-details">
            <h4>Alpine White</h4>
            <p>$15</p>
        </div>
    </div>
    <div class="goobi-choose-vehicle-color">
        <div class="creafix">
            <div class="goobi-vehicle-color-img">
                <img src="{{asset('images/vedicle-black-img.png') }}" alt="">
            </div>
        </div>
        <div class="goobi-vehicle-color-details">
            <h4>Jet Black</h4>
            <p>$15</p>
        </div>
    </div>
    <div class="goobi-choose-vehicle-color">
        <div class="creafix">
            <div class="goobi-vehicle-color-img">
                <img src="{{asset('images/vedicle-white-img.png') }}" alt="">
            </div>
        </div>
        <div class="goobi-vehicle-color-details">
            <h4>Alpine White</h4>
            <p>$15</p>
        </div>
    </div>
    <div class="goobi-choose-vehicle-color">
        <div class="creafix">
            <div class="goobi-vehicle-color-img">
                <img src="{{asset('images/vedicle-black-img.png') }}" alt="">
            </div>
        </div>
        <div class="goobi-vehicle-color-details">
            <h4>Jet Black</h4>
            <p>$15</p>
        </div>
    </div>
    </div> --}}
    <h3 class="vehicle-page-title">Choose your window color</h3>

    <div class="goobi-color-picker-wrapper">
        <div class="row" id="colorPicker">

        </div>
    </div>
    </div>
    </div>
</section>
@endsection

@push("scripts")

@endpush
