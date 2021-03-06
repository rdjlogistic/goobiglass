<?php

    $routes = array();
    function setActiveMenu($route, $noNeedSubUrl = false)
    {
        if($noNeedSubUrl) {
            return (Request::is($route)) ? 'active' : '';
        } else {
            return (Request::is($route) || Request::is($route.'/*')) ? 'active' : '';
        }
    }


?>

<header class="goobi-header-wrapper">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="goobi-logo-wrapper" href="{{url('/')}}">
                <img src="{{asset('images/goobiglasa.png') }}" alt="">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-iconsnemu"></span>
                <span class="toggler-iconsnemu"></span>
                <span class="toggler-iconsnemu"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item {{ setActiveMenu("/") }}">
                        <a class="nav-link" href="{{url('/')}}">HOME</a>
                    </li>
                    <li class="nav-item {{ setActiveMenu("colors") }}">
                        <a class="nav-link" href="{{url('/Colors')}}">Colors</a>
                    </li>
                    <li class="nav-item {{ setActiveMenu("about") }}">
                        <a class="nav-link" href="{{url('/about')}}">ABOUT US</a>
                    </li>
                    <li class="nav-item {{ setActiveMenu("contact") }}">
                        <a class="nav-link" href="{{url('/contact')}}">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>