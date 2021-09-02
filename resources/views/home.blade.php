@extends('layouts.app')

@section('content')
    <div class="goobiglass-layout-wrapper">
        <section class="goobi-banner-wrapper">
            <div class="goobi-banner-img-block">
                <img src="{{asset('images/goobiglass-banner.png') }}" alt="">
            </div>
            <div class="goobi-banner-details-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-1 col-md-1 col-lg-1">
                            <ul class="goobi-social-media-link">
                                <li class="goobi-social-media-list">
                                    <a href="javascript:void(0);" target="_blank">FACEBOOK</a>
                                </li>
                                <li class="goobi-social-media-list">
                                    <a href="javascript:void(0);" target="_blank">LINKEDIN</a>
                                </li>
                                <li class="goobi-social-media-list">
                                    <a href="javascript:void(0);" target="_blank">INSTAGRAM</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-11 col-md-9 col-lg-7" data-aos="fade-up" data-aos-duration="1500">
                            <div class="goobi-banner-details">
                                <h6 class="goobi-page-title-text">Goobi Glass <span class="border-line"></span></h6>
                                <h2 class="subtitle-main">The world's first patent technology colored glass for automobiles.</h2>
                                <div class="goobi-btn-wrapper">
                                    <a href="javascript:void(0);" class="goobi-theme-btn-main">Car Details</a>
                                    <a href="javascript:void(0);" class="goobi-theme-btn-main goobi-ourline-btn">ABOUT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="goobi-scroll-down">
                        <a id="scroll-down" href="javascript:void(0);"><img src="{{asset('images/scroll-down-icon.svg') }}" alt=""> </a>
                    </div>
                </div>
            </div>
        </section>
    </div> 
@endsection
