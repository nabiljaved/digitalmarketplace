<?php $page = 'index-9'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Hero Section -->
    <section class="hero-section-nine">
        <div class="container">
            <div class="home-banner home-banner-nine">
                <div class="row align-items-center w-100">
                    <div class="col-lg-6">

                        <div class="banner-imgs banner-imgs-nine">
                            <div class="banner-1 shape-1">
                                <img class="img-fluid" alt="banner" src="{{ URL::asset('/assets/img/banner-img-04.jpg') }}">
                            </div>
                            <div class="banner-2 shape-3">
                                <img class="img-fluid" alt="banner"
                                    src="{{ URL::asset('/assets/img/banner-img-03.jpg') }}">
                            </div>
                            <div class="banners-3 shape-3">
                                <img class="img-fluid" alt="banner"
                                    src="{{ URL::asset('/assets/img/banner-img-02.jpg') }}">
                            </div>
                            <div class="banner-4 shape-2">
                                <img class="img-responsive" alt="banner"
                                    src="{{ URL::asset('/assets/img/banner-img-01.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10 mx-auto">
                        <div class="section-search section-search-nine aos" data-aos="fade-up">
                            <div class="arrow-ryt-all">
                                <h6>welcome to truely sell Mechanic</h6>
                                <div class="arrow-ryt">
                                    <img src="{{ URL::asset('/assets/img/icons/arrow-nine.svg') }}" alt="">
                                </div>
                            </div>
                            <h1>Providing A Professional Reliable service</h1>
                            <p>Our professional cleaning service comes up with a complete solution that makes your
                                space sparkle!</p>
                            <a href="javascript:;" class="btn btn-primary appoints-btn">Book Appointment</a>
                            <div class="banner-appointment-nine">
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-15.jpg') }}" alt="">
                                <div class="banner-appointment-content">
                                    <p>Got a question about our service?</p>
                                    <h5>Call us: 092837644</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->
    <!-- Safety is out first Priority -->
    <section class="safety-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="safety-first-all aos" data-aos="fade-up">
                        <div class="section-heading section-heading-nine safety-heading-nine aos" data-aos="fade-up">
                            <p>welcome to truely sell Mechanic</p>
                            <h2>Safety is out first Priority</h2>
                        </div>
                        <p class="safety-para">There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered alteration in some form</p>
                        <p class="safety-para-two">There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered alteration in some form, by injected humour,
                            or randomised words which don't look even slightly believable.
                            If you are going to use a passage of Lorem Ipsum,</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="safety-ryt-main aos" data-aos="fade-up">
                                <img src="{{ URL::asset('/assets/img/blog/blog-13.jpg') }}" alt=""
                                    class="img-fluid">
                                <ul>
                                    <li>
                                        <i class="feather-check"></i>
                                        <span>Highly Professional Staff</span>
                                    </li>
                                    <li>
                                        <i class="feather-check"></i>
                                        <span>100% Satisfaction Guarantee</span>
                                    </li>
                                    <li>
                                        <i class="feather-check"></i>
                                        <span>Quality Control System</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="safety-ryt-main safety-ryt-two aos" data-aos="fade-up">
                                <img src="{{ URL::asset('/assets/img/blog/blog-12.jpg') }}" alt=""
                                    class="img-fluid">
                                <ul>
                                    <li>
                                        <i class="feather-check"></i>
                                        <span>Accurate Testing Process</span>
                                    </li>
                                    <li>
                                        <i class="feather-check"></i>
                                        <span>Unrivalled Workmanship</span>
                                    </li>
                                    <li>
                                        <i class="feather-check"></i>
                                        <span>Timely Delivery</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Safety is out first Priority -->

    <!-- Our Services -->
    <section class="service-nine-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading section-heading-nine aos" data-aos="fade-up">
                        <p>TRUSTED & QUALITY SERVICE</p>
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel service-nine-slider">
                        <div class="service-widget service-widget-nine aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-70.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content service-feature-nine">
                                <div class="shop-content-logo">
                                    <img src="{{ URL::asset('/assets/img/icons/car-service-icon-1.svg') }}" alt="">
                                </div>
                                <span>25 Mechanics</span>
                                <p>Performance Upgrade and Customization</p>
                            </div>
                        </div>
                        <div class="service-widget service-widget-nine aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-71.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content service-feature-nine">
                                <div class="shop-content-logo">
                                    <img src="{{ URL::asset('/assets/img/icons/car-service-icon-2.svg') }}" alt="">
                                </div>
                                <span>15 Mechanics</span>
                                <p>Car Audio Repair and Maintenance customers</p>
                            </div>
                        </div>
                        <div class="service-widget service-widget-nine aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-72.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content service-feature-nine">
                                <div class="shop-content-logo">
                                    <img src="{{ URL::asset('/assets/img/icons/car-service-icon-1.svg') }}"
                                        alt="">
                                </div>
                                <span>30 Mechanics</span>
                                <p>Performance Upgrade and Customization</p>
                            </div>
                        </div>
                        <div class="service-widget service-widget-nine aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-73.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content service-feature-nine">
                                <div class="shop-content-logo">
                                    <img src="{{ URL::asset('/assets/img/icons/car-service-icon-3.svg') }}"
                                        alt="">
                                </div>
                                <span>17 Mechanics</span>
                                <p>Engine Service and repair Maintenance</p>
                            </div>
                        </div>
                        <div class="service-widget service-widget-nine aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-70.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content service-feature-nine">
                                <div class="shop-content-logo">
                                    <img src="{{ URL::asset('/assets/img/icons/car-service-icon-1.svg') }}"
                                        alt="">
                                </div>
                                <span>25 Mechanics</span>
                                <p>Performance Upgrade and Customization</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-sec btn-service-nine aos" data-aos="fade-up">
                <a href="{{ url('search') }}" class="btn btn-primary btn-view">VIEW ALL SERVICES</a>
            </div>
        </div>
    </section>
    <!-- /Our Services -->

    <!-- Featured Services -->
    <section class="feature-service-nine">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading section-heading-nine aos" data-aos="fade-up">
                        <p>TRUSTED & QUALITY SERVICE</p>
                        <h2>Featured Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service-widget service-widget-nine">
                        <div class="service-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/services/service-78.jpg') }}">
                            </a>
                            <div class="item-info items-nine">
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}" alt="">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-fa-solid fa-star-half-stroke filled"></i>
                                    <span>(198)</span>
                                </div>
                            </div>
                        </div>
                        <div class="service-content service-content-nine">
                            <span class="sub-title">Car repair</span>
                            <h3 class="title">
                                <a href="javascript:;">Wheel Alignment and Installation</a>
                            </h3>
                            <div class="main-saloons-profile">
                                <div class="saloon-profile-left">
                                    <div class="saloon-content">
                                        <div class="saloon-content-top">
                                            <i class="feather-clock"></i>
                                            <span>07:00 AM - 11:00 PM </span>
                                        </div>
                                        <div class="saloon-content-btn">
                                            <span><i class="feather-map-pin"></i></span>
                                            <span>Main Boulevard, Lahore,</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="saloon-right">
                                    <span>$70.00</span>
                                </div>
                            </div>
                            <div class="service-bottom-nine">
                                <a href="javascript:;" class="btn btn-primary">Make An Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service-widget service-widget-nine">
                        <div class="service-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/services/service-75.jpg') }}">
                            </a>
                            <div class="item-info items-nine">
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}" alt="">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span>(198)</span>
                                </div>
                            </div>
                        </div>
                        <div class="service-content service-content-nine">
                            <span class="sub-title">Two-wheeler service</span>
                            <h3 class="title">
                                <a href="javascript:;">General Auto Repair & Maintenance</a>
                            </h3>
                            <div class="main-saloons-profile">
                                <div class="saloon-profile-left">
                                    <div class="saloon-content">
                                        <div class="saloon-content-top">
                                            <i class="feather-clock"></i>
                                            <span>07:00 AM - 11:00 PM </span>
                                        </div>
                                        <div class="saloon-content-btn">
                                            <span><i class="feather-map-pin"></i></span>
                                            <span>Main Boulevard, Lahore,</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="saloon-right">
                                    <span>$50.00</span>
                                </div>
                            </div>
                            <div class="service-bottom-nine">
                                <a href="javascript:;" class="btn btn-primary">Make An Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service-widget service-widget-nine">
                        <div class="service-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/services/service-74.jpg') }}">
                            </a>
                            <div class="item-info items-nine">
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg') }}" alt="">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i>
                                    <span>(198)</span>
                                </div>
                            </div>
                        </div>
                        <div class="service-content service-content-nine">
                            <span class="sub-title">engine service</span>
                            <h3 class="title">
                                <a href="javascript:;">Engine Service & Repair Service</a>
                            </h3>
                            <div class="main-saloons-profile">
                                <div class="saloon-profile-left">
                                    <div class="saloon-content">
                                        <div class="saloon-content-top">
                                            <i class="feather-clock"></i>
                                            <span>07:00 AM - 11:00 PM </span>
                                        </div>
                                        <div class="saloon-content-btn">
                                            <span><i class="feather-map-pin"></i></span>
                                            <span>Main Boulevard, Lahore,</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="saloon-right">
                                    <span>$78.00</span>
                                </div>
                            </div>
                            <div class="service-bottom-nine">
                                <a href="javascript:;" class="btn btn-primary">Make An Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service-widget service-widget-nine">
                        <div class="service-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/services/service-76.jpg') }}">
                            </a>
                            <div class="item-info items-nine">
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg') }}" alt="">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span>(158)</span>
                                </div>
                            </div>
                        </div>
                        <div class="service-content service-content-nine">
                            <span class="sub-title">Upgrade</span>
                            <h3 class="title">
                                <a href="javascript:;">General Auto Repair & Maintenance</a>
                            </h3>
                            <div class="main-saloons-profile">
                                <div class="saloon-profile-left">
                                    <div class="saloon-content">
                                        <div class="saloon-content-top">
                                            <i class="feather-clock"></i>
                                            <span>07:00 AM - 11:00 PM </span>
                                        </div>
                                        <div class="saloon-content-btn">
                                            <span><i class="feather-map-pin"></i></span>
                                            <span>Main Boulevard, Lahore,</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="saloon-right">
                                    <span>$10.00</span>
                                </div>
                            </div>
                            <div class="service-bottom-nine">
                                <a href="javascript:;" class="btn btn-primary">Make An Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service-widget service-widget-nine">
                        <div class="service-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/services/service-77.jpg') }}">
                            </a>
                            <div class="item-info items-nine">
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}" alt="">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i>
                                    <span>(198)</span>
                                </div>
                            </div>
                        </div>
                        <div class="service-content service-content-nine">
                            <span class="sub-title">inspection</span>
                            <h3 class="title">
                                <a href="javascript:;">Electrical Diagnostics Service</a>
                            </h3>
                            <div class="main-saloons-profile">
                                <div class="saloon-profile-left">
                                    <div class="saloon-content">
                                        <div class="saloon-content-top">
                                            <i class="feather-clock"></i>
                                            <span>07:00 AM - 11:00 PM </span>
                                        </div>
                                        <div class="saloon-content-btn">
                                            <span><i class="feather-map-pin"></i></span>
                                            <span>Main Boulevard, Lahore,</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="saloon-right">
                                    <span>$30.00</span>
                                </div>
                            </div>
                            <div class="service-bottom-nine">
                                <a href="javascript:;" class="btn btn-primary">Make An Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service-widget service-widget-nine">
                        <div class="service-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/services/service-79.jpg') }}">
                            </a>
                            <div class="item-info items-nine">
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}" alt="">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span>(198)</span>
                                </div>
                            </div>
                        </div>
                        <div class="service-content service-content-nine">
                            <span class="sub-title">Car repair</span>
                            <h3 class="title">
                                <a href="javascript:;">Wheel Alignment and Installation</a>
                            </h3>
                            <div class="main-saloons-profile">
                                <div class="saloon-profile-left">
                                    <div class="saloon-content">
                                        <div class="saloon-content-top">
                                            <i class="feather-clock"></i>
                                            <span>07:00 AM - 11:00 PM </span>
                                        </div>
                                        <div class="saloon-content-btn">
                                            <span><i class="feather-map-pin"></i></span>
                                            <span>Main Boulevard, Lahore,</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="saloon-right">
                                    <span>$70.00</span>
                                </div>
                            </div>
                            <div class="service-bottom-nine">
                                <a href="javascript:;" class="btn btn-primary">Make An Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-sec btn-service-nine aos" data-aos="fade-up">
                    <a href="{{ url('search') }}" class="btn btn-primary btn-view">VIEW ALL SERVICES</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Featured Services -->

    <section class="journey-nine-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading section-heading-nine journey-heading-nine aos" data-aos="fade-up">
                        <p>Activity</p>
                        <h2>It’s Our journey</h2>
                    </div>
                </div>
                <div class="col-lg-2 d-flex justify-content-center align-items-center">
                    <div class="journey-client-all aos" data-aos="fade-up">
                        <div class="journey-client-main">
                            <div class="journey-client-counter">
                                <h2 class="counter">644</h2>
                                <span>+</span>
                            </div>
                            <h5>Active Clients</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 d-flex justify-content-center align-items-center">
                    <div class="journey-client-all aos" data-aos="fade-up">
                        <div class="journey-client-main">
                            <div class="journey-client-counter">
                                <h2 class="counter">290</h2>
                                <span>+</span>
                            </div>
                            <h5>Expert Mechanics</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 d-flex justify-content-center align-items-center">
                    <div class="journey-client-all aos" data-aos="fade-up">
                        <div class="journey-client-main">
                            <div class="journey-client-counter">
                                <h2 class="counter">100</h2>
                                <span>+</span>
                            </div>
                            <h5>Total Rewards</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 d-flex justify-content-center align-items-center">
                    <div class="journey-client-all aos" data-aos="fade-up">
                        <div class="journey-client-main">
                            <div class="journey-client-counter">
                                <h2 class="counter">24</h2>
                                <span>+</span>
                            </div>
                            <h5>Years Reputation</h5>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="choose-nine-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading section-heading-nine aos" data-aos="fade-up">
                        <p>TRUSTED & QUALITY SERVICE</p>
                        <h2>Why Choose Us?</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center aos" data-aos="fade-up">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="reasonable-all">
                        <img src="{{ URL::asset('/assets/img/icons/choose-icon-4.svg') }}" alt="">
                        <h5>Reasonable Price</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="reasonable-all expert-all">
                        <img src="{{ URL::asset('/assets/img/icons/choose-icon-3.svg') }}" alt="">
                        <h5>Expert Mechanics</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="reasonable-all delivery-all">
                        <img src="{{ URL::asset('/assets/img/icons/choose-icon-2.svg') }}" alt="">
                        <h5>fast feature</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="reasonable-all workshop-all">
                        <img src="{{ URL::asset('/assets/img/icons/choose-icon-1.svg') }}" alt="">
                        <h5>Awarded Workshop</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Why Choose Us? -->

    <!-- our Mechanics -->
    <section class="mechanics-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading section-heading-nine aos" data-aos="fade-up">
                        <p>OUR TEAM</p>
                        <h2>Our Mechanics</h2>
                    </div>
                </div>
            </div>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">Car Mechanic</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Commercial Mechanic</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row aos" data-aos="fade-up">
                        <div class="col-md-12">
                            <div class="owl-carousel provider-nine-slider">
                                <div class="providerset providerset-nine">
                                    <div class="providerset-img ">
                                        <a href="{{ url('provider-details') }}">
                                            <img src="{{ URL::asset('/assets/img/gallery/gallery-18.jpg') }}"
                                                alt="img">
                                        </a>
                                    </div>
                                    <div class="providerset-content">
                                        <h6>Wheel Alignment Specialist</h6>
                                        <h4><a href="{{ url('provider-details') }}">John Smith</a></h4>
                                        <div class="provider-rating provider-rating-nine">
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="providerset providerset-nine">
                                    <div class="providerset-img ">
                                        <a href="{{ url('provider-details') }}">
                                            <img src="{{ URL::asset('/assets/img/gallery/gallery-19.jpg') }}"
                                                alt="img">
                                        </a>
                                    </div>
                                    <div class="providerset-content">
                                        <h6>Hatchback mechanic</h6>
                                        <h4><a href="{{ url('provider-details') }}">Daniale Joe</a></h4>
                                        <div class="provider-rating provider-rating-nine">
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="providerset providerset-nine">
                                    <div class="providerset-img ">
                                        <a href="{{ url('provider-details') }}">
                                            <img src="{{ URL::asset('/assets/img/gallery/gallery-20.jpg') }}"
                                                alt="img">
                                        </a>
                                    </div>
                                    <div class="providerset-content">
                                        <h6>Mechanic</h6>
                                        <h4><a href="{{ url('provider-details') }}">John Smith</a></h4>
                                        <div class="provider-rating provider-rating-nine">
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="providerset providerset-nine">
                                    <div class="providerset-img ">
                                        <a href="{{ url('provider-details') }}">
                                            <img src="{{ URL::asset('/assets/img/gallery/gallery-18.jpg') }}"
                                                alt="img">
                                        </a>
                                    </div>
                                    <div class="providerset-content">
                                        <h6>Wheel Alignment Specialist</h6>
                                        <h4><a href="{{ url('provider-details') }}">John Smith</a></h4>
                                        <div class="provider-rating provider-rating-nine">
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="providerset providerset-nine">
                                    <div class="providerset-img ">
                                        <a href="{{ url('provider-details') }}">
                                            <img src="{{ URL::asset('/assets/img/gallery/gallery-18.jpg') }}"
                                                alt="img">
                                        </a>
                                    </div>
                                    <div class="providerset-content">
                                        <h6>Wheel Alignment Specialist</h6>
                                        <h4><a href="{{ url('provider-details') }}">John Smith</a></h4>
                                        <div class="provider-rating provider-rating-nine">
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row aos" data-aos="fade-up">
                        <div class="col-md-12">
                            <div class="owl-carousel provider-nine-slider">
                                <div class="providerset providerset-nine">
                                    <div class="providerset-img ">
                                        <a href="{{ url('provider-details') }}">
                                            <img src="{{ URL::asset('/assets/img/gallery/gallery-18.jpg') }}"
                                                alt="img">
                                        </a>
                                    </div>
                                    <div class="providerset-content">
                                        <h6>Wheel Alignment Specialist</h6>
                                        <h4><a href="{{ url('provider-details') }}">John Smith</a></h4>
                                        <div class="provider-rating provider-rating-nine">
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="providerset providerset-nine">
                                    <div class="providerset-img ">
                                        <a href="{{ url('provider-details') }}">
                                            <img src="{{ URL::asset('/assets/img/gallery/gallery-19.jpg') }}"
                                                alt="img">
                                        </a>
                                    </div>
                                    <div class="providerset-content">
                                        <h6>Hatchback mechanic</h6>
                                        <h4><a href="{{ url('provider-details') }}">Daniale Joe</a></h4>
                                        <div class="provider-rating provider-rating-nine">
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="providerset providerset-nine">
                                    <div class="providerset-img ">
                                        <a href="{{ url('provider-details') }}">
                                            <img src="{{ URL::asset('/assets/img/gallery/gallery-20.jpg') }}"
                                                alt="img">
                                        </a>
                                    </div>
                                    <div class="providerset-content">
                                        <h6>Mechanic</h6>
                                        <h4><a href="{{ url('provider-details') }}">John Smith</a></h4>
                                        <div class="provider-rating provider-rating-nine">
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="providerset providerset-nine">
                                    <div class="providerset-img ">
                                        <a href="{{ url('provider-details') }}">
                                            <img src="{{ URL::asset('/assets/img/gallery/gallery-18.jpg') }}"
                                                alt="img">
                                        </a>
                                    </div>
                                    <div class="providerset-content">
                                        <h6>Wheel Alignment Specialist</h6>
                                        <h4><a href="{{ url('provider-details') }}">John Smith</a></h4>
                                        <div class="provider-rating provider-rating-nine">
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="providerset providerset-nine">
                                    <div class="providerset-img ">
                                        <a href="{{ url('provider-details') }}">
                                            <img src="{{ URL::asset('/assets/img/gallery/gallery-18.jpg') }}"
                                                alt="img">
                                        </a>
                                    </div>
                                    <div class="providerset-content">
                                        <h6>Wheel Alignment Specialist</h6>
                                        <h4><a href="{{ url('provider-details') }}">John Smith</a></h4>
                                        <div class="provider-rating provider-rating-nine">
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /our Mechanics -->

    <!-- Customer Reviews -->
    <section class="customer-review-section">
        <div class="customer-side-main-all">
            <div class="customer-side-left-img">
                <img src="{{ URL::asset('/assets/img/customer-review-after.png') }}" alt="">
            </div>
            <div class="customer-side-right-img">
                <img src="{{ URL::asset('/assets/img/customer-review-before.png') }}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading section-heading-nine aos" data-aos="fade-up">
                        <p>OUR LATEST ARTICLES</p>
                        <h2>Customer Reviews</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel customer-review-slider">
                        <div class="customer-reviews-all aos" data-aos="fade-up">
                            <div class="customer-reviews-main">
                                <img src="{{ URL::asset('/assets/img/blog/blog-14.jpg') }}" alt="">
                                <div class="customer-quote">
                                    <img src="{{ URL::asset('/assets/img/icons/customer-quote.svg') }}" alt="">
                                </div>
                            </div>
                            <h4>Vincent Cooper</h4>
                            <span>Alaska, USA</span>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fa-solid fa-star-half-stroke filled"></i>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's
                                standard dummy text ever since.Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.</p>
                        </div>
                        <div class="customer-reviews-all">
                            <div class="customer-reviews-main">
                                <img src="{{ URL::asset('/assets/img/blog/blog-14.jpg') }}" alt="">
                                <div class="customer-quote">
                                    <img src="{{ URL::asset('/assets/img/icons/customer-quote.svg') }}" alt="">
                                </div>
                            </div>
                            <h4>Vincent Cooper</h4>
                            <span>Alaska, USA</span>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fa-solid fa-star-half-stroke filled"></i>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's
                                standard dummy text ever since.Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.</p>
                        </div>
                        <div class="customer-reviews-all">
                            <div class="customer-reviews-main">
                                <img src="{{ URL::asset('/assets/img/blog/blog-14.jpg') }}" alt="">
                                <div class="customer-quote">
                                    <img src="{{ URL::asset('/assets/img/icons/customer-quote.svg') }}" alt="">
                                </div>
                            </div>
                            <h4>Vincent Cooper</h4>
                            <span>Alaska, USA</span>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fa-solid fa-star-half-stroke filled"></i>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's
                                standard dummy text ever since.Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Customer Reviews -->

    <!-- Additional Services -->
    <section class="additional-service-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading section-heading-nine aos" data-aos="fade-up">
                        <p>TRUSTED & QUALITY SERVICE</p>
                        <h2>Additional Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel service-nine-slider">
                        <div class="service-widget service-widget-nine service-widget-nine-two aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-70.jpg') }}">
                                </a>
                                <div class="item-info items-nine items-nine-two">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="service-content service-feature-nine">
                                <span>25 Mechanics</span>
                                <p>General Auto Repair & Maintenance</p>
                            </div>
                        </div>
                        <div class="service-widget service-widget-nine service-widget-nine-two aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-71.jpg') }}">
                                </a>
                                <div class="item-info items-nine items-nine-two">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-20.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="service-content service-feature-nine">
                                <span>25 Mechanics</span>
                                <p>Transmission Repair & Replacement</p>
                            </div>
                        </div>
                        <div class="service-widget service-widget-nine service-widget-nine-two aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-72.jpg') }}">
                                </a>
                                <div class="item-info items-nine items-nine-two">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-07.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="service-content service-feature-nine">
                                <span>25 Mechanics</span>
                                <p>Emission Repair Facility Service Performance</p>
                            </div>
                        </div>
                        <div class="service-widget service-widget-nine service-widget-nine-two aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-73.jpg') }}">
                                </a>
                                <div class="item-info items-nine items-nine-two">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-07.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="service-content service-feature-nine">
                                <span>25 Mechanics</span>
                                <p>Performance Upgrade and Customization</p>
                            </div>
                        </div>
                        <div class="service-widget service-widget-nine service-widget-nine-two aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-73.jpg') }}">
                                </a>
                                <div class="item-info items-nine items-nine-two">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-07.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="service-content service-feature-nine">
                                <span>25 Mechanics</span>
                                <p>Performance Upgrade and Customization</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-sec btn-service-nine aos" data-aos="fade-up">
                <a href="{{ url('search') }}" class="btn btn-primary btn-view">VIEW ALL SERVICES</a>
            </div>
        </div>
    </section>
    <!-- /Additional Services -->

    <!-- Our Blogs -->
    <section class="blogs-nine-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading section-heading-nine aos" data-aos="fade-up">
                        <p>OUR LATEST ARTICLES</p>
                        <h2>Our Blogs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel blogs-nine-slider">
                        <div class="service-widget service-widget-nine">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-77.jpg') }}">
                                </a>
                                <div class="latest-date latest-date-nine">
                                    <span>10</span>
                                    Nov
                                </div>
                            </div>
                            <div class="service-content service-content-nine service-blog-nine">
                                <div class="usefull-bottom useful-bottom-eight useful-bottom-nine">
                                    <div class="useful-img">
                                        <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg') }}"
                                            alt="">
                                        <span>Admin</span>
                                    </div>
                                    <h6><i class="feather-tag"></i>Services</h6>
                                </div>
                                <h5>Sixteen tips for fix and repairs for starting problem</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard.</p>
                                <div class="service-bottom-nine">
                                    <a href="javascript:;" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget service-widget-nine">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-78.jpg') }}">
                                </a>
                                <div class="latest-date latest-date-nine">
                                    <span>13</span>
                                    Nov
                                </div>
                            </div>
                            <div class="service-content service-content-nine service-blog-nine">
                                <div class="usefull-bottom useful-bottom-eight useful-bottom-nine">
                                    <div class="useful-img">
                                        <img src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg') }}"
                                            alt="">
                                        <span>Admin</span>
                                    </div>
                                    <h6><i class="feather-tag"></i>Services</h6>
                                </div>
                                <h5>Sixteen tips for fix and repairs for starting problem</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard.</p>
                                <div class="service-bottom-nine">
                                    <a href="javascript:;" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget service-widget-nine">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-79.jpg') }}">
                                </a>
                                <div class="latest-date latest-date-nine">
                                    <span>15</span>
                                    Nov
                                </div>
                            </div>
                            <div class="service-content service-content-nine service-blog-nine">
                                <div class="usefull-bottom useful-bottom-eight useful-bottom-nine">
                                    <div class="useful-img">
                                        <img src="{{ URL::asset('/assets/img/profiles/avatar-12.jpg') }}"
                                            alt="">
                                        <span>Admin</span>
                                    </div>
                                    <h6><i class="feather-tag"></i>Services</h6>
                                </div>
                                <h5>Sixteen tips for fix and repairs for starting problem</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard.</p>
                                <div class="service-bottom-nine">
                                    <a href="javascript:;" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget service-widget-nine">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-77.jpg') }}">
                                </a>
                                <div class="latest-date latest-date-nine">
                                    <span>15</span>
                                    Nov
                                </div>
                            </div>
                            <div class="service-content service-content-nine service-blog-nine">
                                <div class="usefull-bottom useful-bottom-eight useful-bottom-nine">
                                    <div class="useful-img">
                                        <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg') }}"
                                            alt="">
                                        <span>Admin</span>
                                    </div>
                                    <h6><i class="feather-tag"></i>Services</h6>
                                </div>
                                <h5>Sixteen tips for fix and repairs for starting problem</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard.</p>
                                <div class="service-bottom-nine">
                                    <a href="javascript:;" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-sec btn-service-nine aos" data-aos="fade-up">
                    <a href="{{ url('search') }}" class="btn btn-primary btn-view">VIEW ALL BLOGS</a>
                </div>
            </div>
            <div class="free-service-all">
                <div class="row aos" data-aos="fade-up">
                    <div class="col-lg-6 col-12">
                        <div class="free-service-nine">
                            <div class="free-service-img-one">
                                <img src="{{ URL::asset('/assets/img/service-img-9.jpg') }}" alt="">
                            </div>
                            <div class="free-service-img-two">
                                <img src="{{ URL::asset('/assets/img/service-img-10.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="free-service-bottom-content">
                            <div class="section-heading section-heading-nine free-heading-nine aos" data-aos="fade-up">
                                <p>welcome to truely sell Mechanic</p>
                                <h2>Get A Free Service</h2>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and
                                ypesetting industry. Lorem Ipsum has been the industry's standard.</p>
                            <a href="javascript:;" class="btn btn-primary">Get An Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Our Blogs -->

    <section class="blog-section partner-section-nine">
        <div class="container">
            <div class="row">
                <div class="owl-carousel quote-slider aos" data-aos="fade-up">
                    <div class="partner-img">
                        <img src="{{ URL::asset('/assets/img/partner/partner1.svg') }}" alt="img" />
                    </div>
                    <div class="partner-img">
                        <img src="{{ URL::asset('/assets/img/partner/partner2.svg') }}" alt="img" />
                    </div>
                    <div class="partner-img">
                        <img src="{{ URL::asset('/assets/img/partner/partner3.svg') }}" alt="img" />
                    </div>
                    <div class="partner-img">
                        <img src="{{ URL::asset('/assets/img/partner/partner4.svg') }}" alt="img" />
                    </div>
                    <div class="partner-img">
                        <img src="{{ URL::asset('/assets/img/partner/partner5.svg') }}" alt="img" />
                    </div>
                    <div class="partner-img">
                        <img src="{{ URL::asset('/assets/img/partner/partner6.svg') }}" alt="img" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    @component('components.model-popup')
    @endcomponent
    @component('components.scrollToTop')
    @endcomponent
@endsection
