<?php $page = 'index-7'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Hero Section -->
    <section class="hero-section-seven">
        <div class="hero-sectionseven-top">
            <div class="container">
                <div class="home-banner homer-banner-seven">
                    <div class="row align-items-center w-100">
                        <div class="col-lg-6 col-12">
                            <div class="section-search aos" data-aos="fade-up">
                                <h5>Search From 150 Awesome Verified Ads!</h5>
                                <h1>Best Solution for Every
                                    <span>House Problems</span>
                                </h1>
                                <div class="solution-seven">
                                    <h6>2M+ Professionals registered</h6>
                                    <ul class="total-client-avatar total-client-avatar-seven">
                                        <li>
                                            <a href="javascript:;">
                                                <img src="{{ URL::asset('/assets/img/profiles/avatar-06.jpg') }}"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <img src="{{ URL::asset('/assets/img/profiles/avatar-07.jpg') }}"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <img src="{{ URL::asset('/assets/img/profiles/avatar-08.jpg') }}"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg') }}"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg') }}"
                                                    alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="hero-banner-ryt">
                                <img src="{{ URL::asset('/assets/img/hero-section-seven-ryt.png') }}" alt=""
                                    class="img-fluid">
                                <div class="hero-banner-ryt-content">
                                    <div class="hero-banner-ryt-top">
                                        <h5>+21 k</h5>
                                        <p>Services Completed</p>
                                    </div>
                                    <span>
                                        <img src="{{ URL::asset('/assets/img/icons/suitcase.svg') }}" alt="">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- Service Section -->
    <div class="search-box-two search-box-seven">
        <form action="search">
            <div class="search-input-new line">
                <i class="fas fa-tv bficon"></i>
                <div class="form-group mb-0">
                    <input type="text" class="form-control" placeholder="What are you looking for?">
                </div>
            </div>
            <div class="search-input-new">
                <i class="fas fa-location-arrow bficon"></i>
                <div class="form-group mb-0">
                    <input type="text" class="form-control" placeholder="Your Location">
                    <a class="current-loc-icon current_location" href="javascript:void(0);"></a>
                </div>
            </div>
            <div class="search-btn">
                <button class="btn search_service" type="submit"><i class="feather-search"></i> Search</button>
            </div>
        </form>
    </div>
    <div class="popularsearch-top">
        <h6>Popular Searches</h6>
        <ul>
            <li>Electrical Works</li>
            <li>Cleaning</li>
            <li>AC Repair</li>
        </ul>
    </div>
    <section class="service-section-seven">
        <div class="container">
            <div class="section-heading section-heading-seven">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2>Featured Categories</h2>
                        <p>What do you need to find?</p>
                    </div>
                    <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                        <div class="owl-nav mynav mynav-seven"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel categories-slider-seven">
                        <a href="{{ url('service-details') }}" class="feature-box feature-box-seven aos" data-aos="fade-up">
                            <div class="feature-icon feature-icon-seven">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/car-wash.svg') }}" alt="img"
                                        class="img-fluid">
                                </span>
                            </div>
                            <h5>Painting</h5>
                            <div class="feature-overlay">
                                <img src="{{ URL::asset('/assets/img/services/service-08.jpg') }}" alt="img">
                            </div>
                        </a>
                        <a href="{{ url('service-details') }}" class="feature-box feature-box-seven aos"
                            data-aos="fade-up">
                            <div class="feature-icon feature-icon-seven">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/computer.svg') }}" alt="img"
                                        class="img-fluid">
                                </span>
                            </div>
                            <h5>Construction</h5>
                            <div class="feature-overlay">
                                <img src="{{ URL::asset('/assets/img/services/service-12.jpg') }}" alt="img">
                            </div>
                        </a>
                        <a href="{{ url('service-details') }}" class="feature-box feature-box-seven aos"
                            data-aos="fade-up">
                            <div class="feature-icon feature-icon-seven">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/construction.svg') }}" alt="img"
                                        class="img-fluid">
                                </span>
                            </div>
                            <h5>Computer</h5>
                            <div class="feature-overlay">
                                <img src="{{ URL::asset('/assets/img/services/service-16.jpg') }}" alt="img">
                            </div>
                        </a>
                        <a href="{{ url('service-details') }}" class="feature-box feature-box-seven aos"
                            data-aos="fade-up">
                            <div class="feature-icon feature-icon-seven">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/painting.svg') }}" alt="img"
                                        class="img-fluid">
                                </span>
                            </div>
                            <h5>Car Wash</h5>
                            <div class="feature-overlay">
                                <img src="{{ URL::asset('/assets/img/services/service-18.jpg') }}" alt="img">
                            </div>
                        </a>
                        <a href="{{ url('service-details') }}" class="feature-box feature-box-seven aos"
                            data-aos="fade-up">
                            <div class="feature-icon feature-icon-seven">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/computer.svg') }}" alt="img"
                                        class="img-fluid">
                                </span>
                            </div>
                            <h5>Computer</h5>
                            <div class="feature-overlay">
                                <img src="{{ URL::asset('/assets/img/feature.jpg') }}" alt="img">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Section -->

    <!-- popular service -->
    <section class="popular-service-seven-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading section-heading-seven aos" data-aos="fade-up">
                        <h2>Most Popular Services</h2>
                        <p>What do you need to find?</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel popular-service-seven">
                        <div class="service-widget service-two service-seven aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-64.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Glass Fitting</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}"
                                                class="avatar" alt=""> Jeny
                                            Doe</span></a>
                                </div>
                            </div>
                            <div class="service-content service-content-seven">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Toughened Glass Fitting Service</a>
                                </h3>
                                <p><span class="rate"><i class="feather-phone"></i>28-62-76-32</span><i
                                        class="feather-map-pin"></i>New Jersey, USA</p>
                                <div class="serv-info">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(234)</span>
                                    </div>
                                    <h6>$25.00</h6>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget service-two service-seven aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-65.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Car Repair</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-06.jpg') }}"
                                                class="avatar" alt=""> Jeny
                                            Doe</span></a>
                                </div>
                            </div>
                            <div class="service-content service-content-seven">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Car Repair Service</a>
                                </h3>
                                <p><span class="rate"><i class="feather-phone"></i>28-62-76-32</span><i
                                        class="feather-map-pin"></i>New Jersey, USA</p>
                                <div class="serv-info">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i>
                                        <span>(234)</span>
                                    </div>
                                    <h6>$25.00</h6>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget service-two service-seven aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-66.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Computer Repair</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg') }}"
                                                class="avatar" alt=""> Jeny
                                            Doe</span></a>
                                </div>
                            </div>
                            <div class="service-content service-content-seven">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Computer Repairing & Spares</a>
                                </h3>
                                <p><span class="rate"><i class="feather-phone"></i>28-62-76-32</span><i
                                        class="feather-map-pin"></i>New Jersey, USA</p>
                                <div class="serv-info">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span>(234)</span>
                                    </div>
                                    <h6>$25.00<span class="old-price">$35.00</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget service-two service-seven aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-65.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Car Repair</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-06.jpg') }}"
                                                class="avatar" alt=""> Jeny
                                            Doe</span></a>
                                </div>
                            </div>
                            <div class="service-content service-content-seven">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Car Repair Service</a>
                                </h3>
                                <p><span class="rate"><i class="feather-phone"></i>28-62-76-32</span><i
                                        class="feather-map-pin"></i>New Jersey, USA</p>
                                <div class="serv-info">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span>(234)</span>
                                    </div>
                                    <h6>$86.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /popular service -->

    <!-- Work Section -->
    <section class="work-section-seven">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading section-heading-seven aos" data-aos="fade-up">
                        <h2>How It Works</h2>
                        <p>Aliquam lorem ante, dapibus in, viverra quis</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="work-box-seven aos" data-aos="fade-up">
                        <div class="work-icon-seven">
                            <h1>1</h1>
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/work-seven-3.svg') }}" alt="img">
                            </span>
                        </div>
                        <h5>Choose What To Do</h5>
                        <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus
                            varius laoreet.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box-seven aos" data-aos="fade-up">
                        <div class="work-icon-seven">
                            <h1>2</h1>
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/work-seven-2.svg') }}" alt="img">
                            </span>
                        </div>
                        <h5>Find What You Want</h5>
                        <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus
                            varius laoreet.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box-seven aos" data-aos="fade-up">
                        <div class="work-icon-seven">
                            <h1>3</h1>
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/work-seven-1.svg') }}" alt="img">
                            </span>
                        </div>
                        <h5>Amazing Places</h5>
                        <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus
                            varius laoreet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Work Section -->

    <!-- popular service -->
    <section class="popular-service-seven-section">
        <div class="container">
            <div class="section-heading section-heading-seven">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2>Featured Categories</h2>
                        <p>What do you need to find?</p>
                    </div>
                    <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                        <div class="owl-nav mynav-seven-two"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel recent-projects-seven">
                        <div class="service-widget service-two service-seven aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-67.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Construction</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-06.jpg') }}"
                                                class="avatar" alt=""> Jeny
                                            Doe</span></a>
                                </div>
                            </div>
                            <div class="service-content service-content-seven">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">grinding Steel Metal</a>
                                </h3>
                                <p><span class="rate"><i class="feather-phone"></i>28-62-76-32</span><i
                                        class="feather-map-pin"></i>New Jersey, USA</p>
                                <div class="serv-info">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span>(234)</span>
                                    </div>
                                    <h6>$25.00<span class="old-price">$35.00</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget service-two service-seven aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-68.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Car Mechanism</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg') }}"
                                                class="avatar" alt=""> Jeny
                                            Doe</span></a>
                                </div>
                            </div>
                            <div class="service-content service-content-seven">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Toughened Glass Fitting Services</a>
                                </h3>
                                <p><span class="rate"><i class="feather-phone"></i>28-62-76-32</span><i
                                        class="feather-map-pin"></i>New Jersey, USA</p>
                                <div class="serv-info">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i>
                                        <span>(234)</span>
                                    </div>
                                    <h6>$25.00</h6>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget service-two service-seven aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-69.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Computer
                                            Repairing</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-19.jpg') }}"
                                                class="avatar" alt=""> Jeny
                                            Doe</span></a>
                                </div>
                            </div>
                            <div class="service-content service-content-seven">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Computer Repairing & Spares</a>
                                </h3>
                                <p><span class="rate"><i class="feather-phone"></i>28-62-76-32</span><i
                                        class="feather-map-pin"></i>New Jersey, USA</p>
                                <div class="serv-info">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span>(234)</span>
                                    </div>
                                    <h6>$35.00</h6>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget service-two service-seven aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-65.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Car Repair</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-06.jpg') }}"
                                                class="avatar" alt=""> Jeny
                                            Doe</span></a>
                                </div>
                            </div>
                            <div class="service-content service-content-seven">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Car Repair Service</a>
                                </h3>
                                <p><span class="rate"><i class="feather-phone"></i>28-62-76-32</span><i
                                        class="feather-map-pin"></i>New Jersey, USA</p>
                                <div class="serv-info">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i>
                                        <span>(234)</span>
                                    </div>
                                    <h6>$25.00<span class="old-price">$35.00</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /popular service -->

    <!-- Providers Section -->
    <section class="providers-section-seven">
        <div class="container">
            <div class="section-heading section-heading-seven">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2>Top Providers</h2>
                        <p>What do you need to find?</p>
                    </div>
                    <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                        <div class="owl-nav mynav-seven-three"></div>
                    </div>
                </div>
            </div>
            <div class="row  aos" data-aos="fade-up">
                <div class="col-md-12">
                    <div class="owl-carousel top-projects-seven">
                        <div class="providerset">
                            <div class="providerset-img providerset-img-seven ">
                                <a href="{{ url('provider-details') }}">
                                    <img src="{{ URL::asset('/assets/img/provider/provider-15.jpg') }}" alt="img">
                                </a>
                                <div class="fav-item">
                                    <i class="fa fa-check-circle fav-icons" aria-hidden="true"></i>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="providerset-content providerset-content-seven">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="{{ url('provider-details') }}">John Smith</a></h4>
                                        <span>Electrician</span>
                                    </div>
                                    <div class="rate">
                                        <i class="fas fa-star filled"></i><span>4.8</span>
                                    </div>
                                </div>
                                <div class="provider-rating-seven">
                                    <div class="providerset-prices">
                                        <h6>$20.00<span>/hr</span></h6>
                                    </div>
                                    <a href="{{ url('provider-details') }}" class="btn btn-pink">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="providerset">
                            <div class="providerset-img providerset-img-seven ">
                                <a href="{{ url('provider-details') }}">
                                    <img src="{{ URL::asset('/assets/img/provider/provider-16.jpg') }}" alt="img">
                                </a>
                                <div class="fav-item">
                                    <i class="fa fa-check-circle fav-icons" aria-hidden="true"></i>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="providerset-content providerset-content-seven">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="{{ url('provider-details') }}">George Smith</a></h4>
                                        <span>Construction</span>
                                    </div>
                                    <div class="rate">
                                        <i class="fas fa-star filled"></i><span>4.8</span>
                                    </div>
                                </div>
                                <div class="provider-rating-seven">
                                    <div class="providerset-prices">
                                        <h6>$20.00<span>/hr</span></h6>
                                    </div>
                                    <a href="{{ url('provider-details') }}" class="btn btn-pink">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="providerset">
                            <div class="providerset-img providerset-img-seven ">
                                <a href="{{ url('provider-details') }}">
                                    <img src="{{ URL::asset('/assets/img/provider/provider-17.jpg') }}" alt="img">
                                </a>
                                <div class="fav-item">
                                    <i class="fa fa-check-circle fav-icons" aria-hidden="true"></i>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="providerset-content providerset-content-seven">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="{{ url('provider-details') }}">Matthew Thomas</a></h4>
                                        <span>Computer</span>
                                    </div>
                                    <div class="rate">
                                        <i class="fas fa-star filled"></i><span>4.9</span>
                                    </div>
                                </div>
                                <div class="provider-rating-seven">
                                    <div class="providerset-prices">
                                        <h6>$60.00<span>/hr</span></h6>
                                    </div>
                                    <a href="{{ url('provider-details') }}" class="btn btn-pink">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="providerset">
                            <div class="providerset-img providerset-img-seven ">
                                <a href="{{ url('provider-details') }}">
                                    <img src="{{ URL::asset('/assets/img/provider/provider-18.jpg') }}" alt="img">
                                </a>
                                <div class="fav-item">
                                    <i class="fa fa-check-circle fav-icons" aria-hidden="true"></i>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="providerset-content providerset-content-seven">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="{{ url('provider-details') }}">John Smith</a></h4>
                                        <span>Electrician</span>
                                    </div>
                                    <div class="rate">
                                        <i class="fas fa-star filled"></i><span>4.8</span>
                                    </div>
                                </div>
                                <div class="provider-rating-seven">
                                    <div class="providerset-prices">
                                        <h6>$20.00<span>/hr</span></h6>
                                    </div>
                                    <a href="{{ url('provider-details') }}" class="btn btn-pink">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="providerset">
                            <div class="providerset-img providerset-img-seven ">
                                <a href="{{ url('provider-details') }}">
                                    <img src="{{ URL::asset('/assets/img/provider/provider-15.jpg') }}" alt="img">
                                </a>
                                <div class="fav-item">
                                    <i class="fa fa-check-circle fav-icons" aria-hidden="true"></i>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="providerset-content providerset-content-seven">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="{{ url('provider-details') }}">John Smith</a></h4>
                                        <span>Electrician</span>
                                    </div>
                                    <div class="rate">
                                        <i class="fas fa-star filled"></i><span>4.8</span>
                                    </div>
                                </div>
                                <div class="provider-rating-seven">
                                    <div class="providerset-prices">
                                        <h6>$20.00<span>/hr</span></h6>
                                    </div>
                                    <a href="{{ url('provider-details') }}" class="btn btn-pink">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="providerset">
                            <div class="providerset-img providerset-img-seven ">
                                <a href="{{ url('provider-details') }}">
                                    <img src="{{ URL::asset('/assets/img/provider/provider-15.jpg') }}" alt="img">
                                </a>
                                <div class="fav-item">
                                    <i class="fa fa-check-circle fav-icons" aria-hidden="true"></i>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="providerset-content providerset-content-seven">
                                <div class="providerset-price">
                                    <div class="providerset-name">
                                        <h4><a href="{{ url('provider-details') }}">John Smith</a></h4>
                                        <span>Electrician</span>
                                    </div>
                                    <div class="rate">
                                        <i class="fas fa-star filled"></i><span>4.8</span>
                                    </div>
                                </div>
                                <div class="provider-rating-seven">
                                    <div class="providerset-prices">
                                        <h6>$20.00<span>/hr</span></h6>
                                    </div>
                                    <a href="{{ url('provider-details') }}" class="btn btn-pink">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Providers Section -->

    <!-- pricing Section -->
    <section class="price-sections-seven">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading section-heading-seven aos" data-aos="fade-up">
                        <h2>Pricing Plan</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                    </div>
                </div>
            </div>
            <div class="price-toggle price-toggle-seven mb-0">
                <div class="status-toggle toggle-pink d-inline-flex align-items-center">
                    Bill Monthly
                    <input type="checkbox" id="status_1" class="check">
                    <label for="status_1" class="checktoggle">checkbox</label>
                    Bill Annualy
                </div>
            </div>
            <div class="row aos" data-aos="fade-up">
                <div class="col-lg-4 col-sm-12">
                    <div class="pricing-plans price-new pricing-plans-seven">
                        <div class="pricing-plans-img">
                            <img src="{{ URL::asset('/assets/img/icons/pricing-seven-3.svg') }}" alt="">
                        </div>
                        <div class="pricing-planshead">
                            <h5>Basic</h5>
                            <h6><span>$</span>10.00</h6>
                        </div>
                        <div class="pricing-planscontent pricing-planscontent-seven">
                            <ul>
                                <li>
                                    <i class="fa fa-check me-2"></i>
                                    <span>1 Bathroom cleaning</span>
                                </li>
                                <li>
                                    <i class="fa fa-check me-2"></i>
                                    <span>Up to 3 bedrooms cleaning</span>
                                </li>
                                <li class="inactive">
                                    <i class="fa fa-check me-2"></i>
                                    <span>1 Livingroom cleaning</span>
                                </li>
                                <li class="inactive">
                                    <i class="fa fa-check me-2"></i>
                                    <span>Small kitchen (0 - 150 ft2)</span>
                                </li>
                                <li class="inactive">
                                    <i class="fa fa-check me-2"></i>
                                    <span>Up to 2 additional rooms cleaning</span>
                                </li>
                            </ul>
                            <div class="pricing-btn">
                                <a href="{{ url('search') }}" class="btn btn-view">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="pricing-plans price-new pricing-plans-seven active-seven">
                        <div class="price-block">
                            <span class="popular">MOST POPULAR</span>
                        </div>
                        <div class="pricing-plans-img">
                            <img src="{{ URL::asset('/assets/img/icons/pricing-seven-2.svg') }}" alt="">
                        </div>
                        <div class="pricing-planshead">
                            <h5>Basic</h5>
                            <h6><span>$</span>70.00</h6>
                        </div>
                        <div class="pricing-planscontent pricing-planscontent-seven">
                            <ul>
                                <li>
                                    <i class="fa fa-check me-2"></i>
                                    <span>1 Bathroom cleaning</span>
                                </li>
                                <li>
                                    <i class="fa fa-check me-2"></i>
                                    <span>Up to 3 bedrooms cleaning</span>
                                </li>
                                <li>
                                    <i class="fa fa-check me-2"></i>
                                    <span>1 Livingroom cleaning</span>
                                </li>
                                <li>
                                    <i class="fa fa-check me-2"></i>
                                    <span>Small kitchen (0 - 150 ft2)</span>
                                </li>
                                <li>
                                    <i class="fa fa-check me-2"></i>
                                    <span>Up to 2 additional rooms cleaning</span>
                                </li>
                            </ul>
                            <div class="pricing-btn">
                                <a href="{{ url('search') }}" class="btn btn-view">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="pricing-plans price-new pricing-plans-seven">
                        <div class="pricing-plans-img">
                            <img src="{{ URL::asset('/assets/img/icons/pricing-seven-1.svg') }}" alt="">
                        </div>
                        <div class="pricing-planshead">
                            <h5>Basic</h5>
                            <h6><span>$</span>10.00</h6>
                        </div>
                        <div class="pricing-planscontent pricing-planscontent-seven">
                            <ul>
                                <li>
                                    <i class="fa fa-check me-2"></i>
                                    <span>1 Bathroom cleaning</span>
                                </li>
                                <li>
                                    <i class="fa fa-check me-2"></i>
                                    <span>Up to 3 bedrooms cleaning</span>
                                </li>
                                <li class="inactive">
                                    <i class="fa fa-check me-2"></i>
                                    <span>1 Livingroom cleaning</span>
                                </li>
                                <li class="inactive">
                                    <i class="fa fa-check me-2"></i>
                                    <span>Small kitchen (0 - 150 ft2)</span>
                                </li>
                                <li class="inactive">
                                    <i class="fa fa-check me-2"></i>
                                    <span>Up to 2 additional rooms cleaning</span>
                                </li>
                            </ul>
                            <div class="pricing-btn">
                                <a href="{{ url('search') }}" class="btn btn-view">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /pricing Section -->

    <!-- App Section -->
    <section class="app-seven-section">
        <div class="container">
            <div class="app-sec app-sec-seven">
                <div class="row align-items-center w-100">
                    <div class="col-lg-6 col-12">
                        <div class="new-app-seven-middle">
                            <div class="heading aos" data-aos="fade-up">
                                <h2>Download <span>Our New App</span></h2>
                                <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut
                                    metus varius laoreet.Aliquam lorem ante, dapibus in, viverra quis, feugiat
                                    Phasellus viverra,</p>
                            </div>
                            <div class="new-app-six-bottom aos" data-aos="fade-up">
                                <a href="javascript:;" target="_blank">
                                    <img src="{{ URL::asset('/assets/img/icons/scan-six.svg') }}" class="img-fluid"
                                        alt="img">
                                </a>
                                <div class="new-app-six-content">
                                    <a href="javascript:;">
                                        <img src="{{ URL::asset('/assets/img/icons/googleplay-seven.svg') }}"
                                            class="img-fluid new-six-img" alt="img">
                                    </a>
                                    <a href="javascript:;">
                                        <img src="{{ URL::asset('/assets/img/icons/appstore-seven.svg') }}"
                                            class="img-fluid" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="appimg-seven aos" data-aos="fade-up">
                            <img src="{{ URL::asset('/assets/img/app-seven.png') }}" class="img-fluid" alt="img">
                            <!-- <div class="app-img-sec">
                                <img src="{{ URL::asset('/assets/img/app-seven-bg.png') }}" alt="">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /App Section -->

    <!-- Testimonials Section -->
    <section class="testimonals-seven-section pt-0">
        <div class="container">
            <div class="section-heading section-heading-seven">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2>Top Providers</h2>
                        <p>What do you need to find?</p>
                    </div>
                    <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                        <div class="owl-nav mynav-test"></div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="testimonals-top-seven">
                        <img src="{{ URL::asset('/assets/img/testimonials-seven.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="owl-carousel testimonals-seven-slider">
                        <div class="testimonials-main-ryt">
                            <div class="testimonials-content-seven">
                                <div class="testimonials-seven-img">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-17.jpg') }}" alt="">
                                    <div class="testimonials-img-content">
                                        <h6>James Williams</h6>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ URL::asset('/assets/img/icons/test-quote.svg') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form, by injected humour, or randomised
                                words which don</p>
                        </div>
                        <div class="testimonials-main-ryt">
                            <div class="testimonials-content-seven">
                                <div class="testimonials-seven-img">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-19.jpg') }}" alt="">
                                    <div class="testimonials-img-content">
                                        <h6>James Williams</h6>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ URL::asset('/assets/img/icons/test-quote.svg') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form, by injected humour, or randomised
                                words which don</p>
                        </div>
                        <div class="testimonials-main-ryt">
                            <div class="testimonials-content-seven">
                                <div class="testimonials-seven-img">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg') }}" alt="">
                                    <div class="testimonials-img-content">
                                        <h6>James Williams</h6>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ URL::asset('/assets/img/icons/test-quote.svg') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form, by injected humour, or randomised
                                words which don</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Testimonials Section -->

    <!-- pricing Section -->
    <section class="price-sections-seven">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading section-heading-seven aos" data-aos="fade-up">
                        <h2>Our Recent Blog</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel our-recent-blog">
                        <div class="service-widget service-seven-blog aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('blog-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/blog/blog-01.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content service-content-seven">
                                <div class="service-bottom-seven">
                                    <div class="service-bottom-icons">
                                        <i class="feather-calendar"></i>
                                        <span>15, Dec 2023</span>
                                    </div>
                                    <h6>Repair</h6>
                                </div>
                                <h3 class="title">
                                    <a href="{{ url('blog-details') }}">Lorem ipsum dolor sit amet, adipiscing elit, sed
                                        do eiusmod</a>
                                </h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    laudantium,eaque ipsa </p>
                                <div class="usefull-bottom">
                                    <div class="useful-img">
                                        <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg') }}"
                                            alt="">
                                        <span>Sophie</span>
                                    </div>
                                    <a href="javascript:void(0);">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget service-seven-blog aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('blog-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/blog/blog-02.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content service-content-seven">
                                <div class="service-bottom-seven">
                                    <div class="service-bottom-icons">
                                        <i class="feather-calendar"></i>
                                        <span>10, Dec 2023</span>
                                    </div>
                                    <h6>Cleaning</h6>
                                </div>
                                <h3 class="title">
                                    <a href="{{ url('blog-details') }}">Lorem ipsum dolor sit amet, adipiscing elit, sed
                                        do eiusmod</a>
                                </h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    laudantium,eaque ipsa </p>
                                <div class="usefull-bottom">
                                    <div class="useful-img">
                                        <img src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg') }}"
                                            alt="">
                                        <span>James</span>
                                    </div>
                                    <a href="javascript:void(0);">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget service-seven-blog aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('blog-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/blog/blog-03.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content service-content-seven">
                                <div class="service-bottom-seven">
                                    <div class="service-bottom-icons">
                                        <i class="feather-calendar"></i>
                                        <span>15, Dec 2023</span>
                                    </div>
                                    <h6>Repair</h6>
                                </div>
                                <h3 class="title">
                                    <a href="{{ url('blog-details') }}">Lorem ipsum dolor sit amet, adipiscing elit, sed
                                        do eiusmod</a>
                                </h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    laudantium,eaque ipsa </p>
                                <div class="usefull-bottom">
                                    <div class="useful-img">
                                        <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg') }}"
                                            alt="">
                                        <span>George</span>
                                    </div>
                                    <a href="javascript:void(0);">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget service-seven-blog aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('blog-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/blog/blog-01.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content service-content-seven">
                                <div class="service-bottom-seven">
                                    <div class="service-bottom-icons">
                                        <i class="feather-calendar"></i>
                                        <span>15, Dec 2023</span>
                                    </div>
                                    <h6>Repair</h6>
                                </div>
                                <h3 class="title">
                                    <a href="{{ url('blog-details') }}">Lorem ipsum dolor sit amet, adipiscing elit, sed
                                        do eiusmod</a>
                                </h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    laudantium,eaque ipsa </p>
                                <div class="usefull-bottom">
                                    <div class="useful-img">
                                        <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg') }}"
                                            alt="">
                                        <span>Sophie</span>
                                    </div>
                                    <a href="javascript:void(0);">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /pricing Section -->

    <!-- Partners Section -->
    <section class="our-partners-seven">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading section-heading-seven aos" data-aos="fade-up">
                        <h2>Our Partners</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                    </div>
                </div>
                <div class="owl-carousel partners-slider-seven aos " data-aos="fade-up">
                    <div class="partner-img">
                        <img src="{{ URL::asset('/assets/img/partner/partner1.svg') }}" alt="img">
                    </div>
                    <div class="partner-img">
                        <img src="{{ URL::asset('/assets/img/partner/partner2.svg') }}" alt="img">
                    </div>
                    <div class="partner-img">
                        <img src="{{ URL::asset('/assets/img/partner/partner3.svg') }}" alt="img">
                    </div>
                    <div class="partner-img">
                        <img src="{{ URL::asset('/assets/img/partner/partner4.svg') }}" alt="img">
                    </div>
                    <div class="partner-img">
                        <img src="{{ URL::asset('/assets/img/partner/partner5.svg') }}" alt="img">
                    </div>
                    <div class="partner-img">
                        <img src="{{ URL::asset('/assets/img/partner/partner6.svg') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Partners Section -->
    @component('components.model-popup')
    @endcomponent
    @component('components.scrollToTop')
    @endcomponent
@endsection
