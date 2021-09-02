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
        <section class="goobi-safe-relaxing-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-6" data-aos="fade-up" data-aos-duration="1500">
                        <div class="goobi-car-img-box-cover">
                            <div class="goobi-car-img-wrapper">
                                <img src="{{asset('images/car-img.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-6" data-aos="fade-up" data-aos-duration="1500">
                        <div class="goobi-safe-details">
                            <h4>Safe. Relaxing. </h4>
                            <h4>Good to ride in. </h4>
                            <h4>Boldly decorated. </h4>
                            <h6>Goobi Glass is the world's first colored glass for automobiles. We offer windows for any type of vehicle with many colors to chose from.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="goobi-core-values-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" data-aos="fade-up" data-aos-duration="1500">
                        <div class="goobi-work-details">
                            <h2 class="subtitle-main">How Does It Work</h2>
                            <p class="goobi-paragraph-text">Our team is comprised of talented experts who are passionate about their work, and dedicated to deliver you high quality colored windows for your automobile. </p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="goobi-core-values-details">
                            <h4>01</h4>
                            <h6 class="blog-title-main">Submit a form with the year, make and model of your car.</h6>
                            <p class="goobi-paragraph-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="goobi-core-values-details">
                            <h4>02</h4>
                            <h6 class="blog-title-main">An expert will reach out to you for more details.</h6>
                            <p class="goobi-paragraph-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="goobi-core-values-details">
                            <h4>03</h4>
                            <h6 class="blog-title-main">Select a preferred method of payment.</h6>
                            <p class="goobi-paragraph-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="goobi-core-values-details">
                            <h4>04</h4>
                            <h6 class="blog-title-main">Your colored glass is made and shipped directly to your door.</h6>
                            <p class="goobi-paragraph-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-duration="1500">
                        <div class="goobi-core-values-details">
                            <h4>05</h4>
                            <h6 class="blog-title-main">Install the windows with your mechanic or a certified Goobi Glass installer.</h6>
                            <p class="goobi-paragraph-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="goobi-car-view-section">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-1 col-lg-10">
                        <div class="goobi-car-view-details">
                            <h2 class="subtitle-main">Car View</h2>
                            <p class="goobi-paragraph-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <a href="" class="goobi-car-view-list-block">
                                    <div class="goobi-car-view-img">
                                        <img src="{{asset('images/Side-driver-view-01.png') }}" alt="">
                                    </div>
                                    <div class="">
                                        <h6 class="sub-paragraph-text">Side driver view</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <a href="" class="goobi-car-view-list-block">
                                    <div class="goobi-car-view-img">
                                        <img src="{{asset('images/Side-passenger-view-02.png') }}" alt="">
                                    </div>
                                    <div class="">
                                        <h6 class="sub-paragraph-text">Side passenger view</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <a href="" class="goobi-car-view-list-block">
                                    <div class="goobi-car-view-img">
                                        <img src="{{asset('images/Above-view-03.png') }}" alt="">
                                    </div>
                                    <div class="">
                                        <h6 class="sub-paragraph-text">Above view</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <a href="" class="goobi-car-view-list-block">
                                    <div class="goobi-car-view-img">
                                        <img src="{{asset('images/Behind-Full-body-view-04.png') }}" alt="">
                                    </div>
                                    <div class="">
                                        <h6 class="sub-paragraph-text">Behind Full body view</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <a href="" class="goobi-car-view-list-block">
                                    <div class="goobi-car-view-img">
                                        <img src="{{asset('images/Back-windshield-view-05.png') }}" alt="">
                                    </div>
                                    <div class="">
                                        <h6 class="sub-paragraph-text">Back windshield view</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <a href="" class="goobi-car-view-list-block">
                                    <div class="goobi-car-view-img">
                                        <img src="{{asset('images/Sun-Roof-view-06.png') }}" alt="">
                                    </div>
                                    <div class="">
                                        <h6 class="sub-paragraph-text">Sun Roof  view</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> 
@endsection
