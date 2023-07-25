<?php $page = 'index-2'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Hero Section -->
    <section class="hero-section-two">
        <div class="banner-slider slider">
            <div class="banner">
                <img class="img-fluid" src="{{ URL::asset('/assets/img/banner.jpg') }}" alt="img">
            </div>
            <div class="banner">
                <img class="img-fluid" src="{{ URL::asset('/assets/img/banner-02.jpg') }}" alt="img">
            </div>
            <div class="banner">
                <img class="img-fluid" src="{{ URL::asset('/assets/img/banner-03.jpg') }}" alt="img">
            </div>
        </div>
        <div class="banner-search aos" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h1>World's Largest <span>Marketplace</span></h1>
                        <p>Search From 150 Awesome Verified Ads!</p>
                        <div class="search-box-two">
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
                                        <a class="current-loc-icon current_location" href="javascript:void(0);"><i
                                                class="fas fa-crosshairs"></i></a>
                                    </div>
                                </div>
                                <div class="search-btn">
                                    <button class="btn search_service" type="submit"><i class="feather-search"></i>
                                        Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- Feature Section -->
    <section class="feature-section-two">
        <div class="container">
            <div class="row">
                <div class="col-md-6 aos" data-aos="fade-up">
                    <div class="section-heading-two">
                        <h2>Featured Categories</h2>
                        <p>What do you need to find?</p>
                    </div>
                </div>
                <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                    <a href="{{ url('categories') }}" class="btn btn-pink btn-viewall">View All<i
                            class="feather-arrow-right-circle"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="feature-widget">
                        <div class="feature-img">
                            <a href="{{ url('search') }}">
                                <img src="{{ URL::asset('/assets/img/services/service-06.jpg') }}" class="img-fluid"
                                    alt="img">
                            </a>
                        </div>
                        <div class="feature-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/feature-icon-09.svg') }}" alt="img">
                            </span>
                            <div class="feature-title">
                                <h5>Construction</h5>
                                <p>10 Services</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-widget">
                        <div class="feature-img">
                            <a href="{{ url('search') }}">
                                <img src="{{ URL::asset('/assets/img/services/service-07.jpg') }}" class="img-fluid"
                                    alt="img">
                            </a>
                        </div>
                        <div class="feature-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/feature-icon-10.svg') }}" alt="img">
                            </span>
                            <div class="feature-title">
                                <h5>Interior</h5>
                                <p>08 Services</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-widget">
                        <div class="feature-img">
                            <a href="{{ url('search') }}">
                                <img src="{{ URL::asset('/assets/img/services/service-08.jpg') }}" class="img-fluid"
                                    alt="img">
                            </a>
                        </div>
                        <div class="feature-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/feature-icon-11.svg') }}" alt="img">
                            </span>
                            <div class="feature-title">
                                <h5>Car Wash</h5>
                                <p>15 Services</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-widget">
                        <div class="feature-img">
                            <a href="{{ url('search') }}">
                                <img src="{{ URL::asset('/assets/img/services/service-09.jpg') }}" class="img-fluid"
                                    alt="img">
                            </a>
                        </div>
                        <div class="feature-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/feature-icon-12.svg') }}" alt="img">
                            </span>
                            <div class="feature-title">
                                <h5>Cleaning</h5>
                                <p>20 Services</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-widget">
                        <div class="feature-img">
                            <a href="{{ url('search') }}">
                                <img src="{{ URL::asset('/assets/img/services/service-01.jpg') }}" class="img-fluid"
                                    alt="img">
                            </a>
                        </div>
                        <div class="feature-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/feature-icon-13.svg') }}" alt="img">
                            </span>
                            <div class="feature-title">
                                <h5>Electrical</h5>
                                <p>17 Services</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-widget">
                        <div class="feature-img">
                            <a href="{{ url('search') }}">
                                <img src="{{ URL::asset('/assets/img/services/service-10.jpg') }}" class="img-fluid"
                                    alt="img">
                            </a>
                        </div>
                        <div class="feature-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/feature-icon-14.svg') }}" alt="img">
                            </span>
                            <div class="feature-title">
                                <h5>Construction</h5>
                                <p>13 Services</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Feature Section -->

    <!-- Service Section -->
    <section class="service-section-two">
        <div class="container">
            <div class="row">
                <div class="col-md-6 aos" data-aos="fade-up">
                    <div class="section-heading-two">
                        <h2>Featured Services</h2>
                        <p>Explore the greates our services. You won’t be disappointed</p>
                    </div>
                </div>
                <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                    <div class="owl-nav mynav"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel service-slider">
                        <div class="service-widget service-two aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-01.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Cleaning</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}"
                                                class="avatar" alt=""> Jeny Doe</span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Electric Panel Repairing Service</a>
                                </h3>
                                <p><i class="feather-map-pin"></i>New Jersey, USA<span class="rate"><i
                                            class="feather-phone"></i>+1 123 456 7890</span></p>
                                <div class="serv-info">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i>
                                        <span>(10)</span>
                                    </div>
                                    <h6>$25.00<span class="old-price">$35.00</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget service-two aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-02.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Construction</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                class="avatar" alt=""> Nick John</span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Toughened Glass Fitting Services</a>
                                </h3>
                                <p><i class="feather-map-pin"></i>Montana, USA<span class="rate"><i
                                            class="feather-phone"></i>+1 123 456 7890</span></p>
                                <div class="serv-info">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span>(10)</span>
                                    </div>
                                    <h6>$45.00</h6>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget service-two aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-03.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Carpentry</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg') }}"
                                                class="avatar" alt=""> james</span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Wooden Carpentry Work</a>
                                </h3>
                                <p><i class="feather-map-pin"></i>Montana, USA<span class="rate"><i
                                            class="feather-phone"></i>+1 123 456 7890</span></p>
                                <div class="serv-info">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i>
                                        <span>(10)</span>
                                    </div>
                                    <h6>$45.00</h6>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget service-two aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-11.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Construction</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-04.jpg') }}"
                                                class="avatar" alt=""> John Doe</span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Plumbing Services</a>
                                </h3>
                                <p><i class="feather-map-pin"></i>Georgia, USA<span class="rate"><i
                                            class="feather-phone"></i>+1 123 456 7890</span></p>
                                <div class="serv-info">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span>(10)</span>
                                    </div>
                                    <h6>$45.00</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Section -->

    <!-- Work Section -->
    <section class="work-section-two">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading sec-header aos" data-aos="fade-up">
                        <h2>How It Works</h2>
                        <p>Aliquam lorem ante, dapibus in, viverra quis</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6">
                    <div class="work-wrap-box work-first aos" data-aos="fade-up">
                        <div class="work-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/work-icon-01.svg') }}" alt="img">
                            </span>
                        </div>
                        <h5>Choose What To Do</h5>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing tempor labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="work-wrap-box work-last aos" data-aos="fade-up">
                        <div class="work-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/work-icon-02.svg') }}" alt="img">
                            </span>
                        </div>
                        <h5>Find What You Want</h5>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing tempor labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="work-wrap-box aos" data-aos="fade-up">
                        <div class="work-flex">
                            <div class="work-icon">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/work-icon-03.svg') }}" alt="img">
                                </span>
                            </div>
                            <h5>Amazing Places</h5>
                            <p>Lorem ipsum dolor amet, consectetur adipiscing tempor labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Work Section -->

    <!-- Service Section -->
    <section class="popular-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 aos" data-aos="fade-up">
                    <div class="section-heading-two">
                        <h2>Most Popular Services</h2>
                        <p>Explore the greates our services. You won’t be disappointed</p>
                    </div>
                </div>
                <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                    <div class="owl-nav mynav1"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel popular-slider">

                        <div class="service-widget service-two aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-04.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Car Wash</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}"
                                                class="avatar" alt=""></span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Car Repair Services</a>
                                </h3>
                                <p><i class="feather-map-pin"></i>Maryland City, MD, USA<span class="rate"><i
                                            class="feather-phone"></i>+1 123 456 7890</span></p>
                                <div class="serv-info">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i>
                                        <span>(10)</span>
                                    </div>
                                    <h6>$20.00<span class="old-price">$35.00</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget service-two aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-05.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Cleaning</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                class="avatar" alt=""></span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Commercial Painting Services</a>
                                </h3>
                                <p><i class="feather-map-pin"></i>Alabama, USA<span class="rate"><i
                                            class="feather-phone"></i>+1 123 456 7890</span></p>
                                <div class="serv-info">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span>(10)</span>
                                    </div>
                                    <h6>$500.00</h6>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget service-two aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-06.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Computer</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg') }}"
                                                class="avatar" alt=""></span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Computer & Server AMC Service</a>
                                </h3>
                                <p><i class="feather-map-pin"></i>California, USA<span class="rate"><i
                                            class="feather-phone"></i>+1 123 456 7890</span></p>
                                <div class="serv-info">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i>
                                        <span>(10)</span>
                                    </div>
                                    <h6>$80.00<span class="old-price">$96.00</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget service-two aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-08.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span class="item-cat">Cleaning</span></a>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info">
                                    <a href="{{ url('providers') }}"><span class="item-img"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-04.jpg') }}"
                                                class="avatar" alt=""></span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Steam Car Wash</a>
                                </h3>
                                <p><i class="feather-map-pin"></i>Texas, USA<span class="rate"><i
                                            class="feather-phone"></i>+1 123 456 7890</span></p>
                                <div class="serv-info">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span>(10)</span>
                                    </div>
                                    <h6>$500.00</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Section -->

    <!-- /Providers Section -->
    <section class="providers-section-two">
        <div class="container">
            <div class="row">
                <div class="col-md-6 aos" data-aos="fade-up">
                    <div class="section-heading-two white-text">
                        <h2>Top Providers</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error</p>
                    </div>
                </div>
                <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                    <a href="{{ url('providers') }}" class="btn btn-pink btn-viewall">View All<i
                            class="feather-arrow-right-circle"></i></a>
                </div>
            </div>
            <div class="row  aos" data-aos="fade-up">
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset provider-box">
                        <div class="providerset-img">
                            <a href="{{ url('provider-details') }}">
                                <img src="{{ URL::asset('/assets/img/provider/provider-11.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="providerset-content">
                            <div class="providerset-price">
                                <div class="providerset-name">
                                    <h4><a href="{{ url('provider-details') }}">John Smith</a><i
                                            class="fa fa-check-circle" aria-hidden="true"></i></h4>
                                    <span>Electrician</span>
                                </div>
                                <div class="providerset-prices">
                                    <h6>$20.00<span>/hr</span></h6>
                                </div>
                            </div>
                            <div class="provider-rating">
                                <div class="rate">
                                    <i class="fas fa-star filled"></i><span>4.8</span>
                                </div>
                                <a href="{{ url('provider-details') }}" class="btn btn-pink">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset provider-box">
                        <div class="providerset-img">
                            <a href="{{ url('provider-details') }}">
                                <img src="{{ URL::asset('/assets/img/provider/provider-12.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="providerset-content">
                            <div class="providerset-price">
                                <div class="providerset-name">
                                    <h4><a href="{{ url('provider-details') }}">Michael</a><i class="fa fa-check-circle"
                                            aria-hidden="true"></i></h4>
                                    <span>Carpenter</span>
                                </div>
                                <div class="providerset-prices">
                                    <h6>$50.00<span>/hr</span></h6>
                                </div>
                            </div>
                            <div class="provider-rating">
                                <div class="rate">
                                    <i class="fas fa-star filled"></i><span>4.8</span>
                                </div>
                                <a href="{{ url('provider-details') }}" class="btn btn-pink">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset provider-box">
                        <div class="providerset-img">
                            <a href="{{ url('provider-details') }}">
                                <img src="{{ URL::asset('/assets/img/provider/provider-13.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="providerset-content">
                            <div class="providerset-price">
                                <div class="providerset-name">
                                    <h4><a href="{{ url('provider-details') }}">Antoinette</a><i
                                            class="fa fa-check-circle" aria-hidden="true"></i></h4>
                                    <span>Cleaner</span>
                                </div>
                                <div class="providerset-prices">
                                    <h6>$25.00<span>/hr</span></h6>
                                </div>
                            </div>
                            <div class="provider-rating">
                                <div class="rate">
                                    <i class="fas fa-star filled"></i><span>4.8</span>
                                </div>
                                <a href="{{ url('provider-details') }}" class="btn btn-pink">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset provider-box">
                        <div class="providerset-img">
                            <a href="{{ url('provider-details') }}">
                                <img src="{{ URL::asset('/assets/img/provider/provider-14.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="providerset-content">
                            <div class="providerset-price">
                                <div class="providerset-name">
                                    <h4><a href="{{ url('provider-details') }}">Thompson</a><i class="fa fa-check-circle"
                                            aria-hidden="true"></i></h4>
                                    <span>Mechanic</span>
                                </div>
                                <div class="providerset-prices">
                                    <h6>$25.00<span>/hr</span></h6>
                                </div>
                            </div>
                            <div class="provider-rating">
                                <div class="rate">
                                    <i class="fas fa-star filled"></i><span>4.8</span>
                                </div>
                                <a href="{{ url('provider-details') }}" class="btn btn-pink">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Providers Section -->

    <!-- pricing Section -->
    <section class="price-sections">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center aos" data-aos="fade-up">
                    <div class="section-heading sec-header">
                        <h2>Pricing Plans</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>
            <div class="price-toggle mb-0">
                <div class="status-toggle toggle-pink d-inline-flex align-items-center">
                    Bill Monthly
                    <input type="checkbox" id="status_1" class="check">
                    <label for="status_1" class="checktoggle">checkbox</label>
                    Bill Annualy
                </div>
            </div>
            <div class="row aos" data-aos="fade-up">
                <div class="col-lg-4 col-sm-12">
                    <div class="pricing-plans price-new">
                        <div class="pricing-planshead">
                            <h6>$50<span>/month</span></h6>
                            <h4>Starter</h4>
                            <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                        </div>
                        <div class="pricing-planscontent">
                            <ul>
                                <li>
                                    <i class="fa fa-check-circle me-2"></i>
                                    <span>Sed perspiciatis unde omnis natus error</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2"></i>
                                    <span>Lorem dolor consecteturadipiscing elit</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2"></i>
                                    <span>Duis irure dolor reprehenderit voluptate</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2"></i>
                                    <span>Nemo enim ipsam voluptatem quia </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2"></i>
                                    <span>Sed perspiciatis iste natus error </span>
                                </li>
                            </ul>
                            <div class="pricing-btn">
                                <a href="{{ url('search') }}" class="btn btn-view">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="pricing-plans price-new active">
                        <div class="pricing-planshead">
                            <div class="price-block">
                                <span class="popular">MOST POPULAR</span>
                            </div>
                            <h6>$100<span>/month</span></h6>
                            <h4>Company</h4>
                            <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                        </div>
                        <div class="pricing-planscontent">
                            <ul>
                                <li>
                                    <i class="fa fa-check-circle me-2"></i>
                                    <span>Sed perspiciatis unde omnis natus error</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2"></i>
                                    <span>Lorem dolor consecteturadipiscing elit</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2"></i>
                                    <span>Duis irure dolor reprehenderit voluptate</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2"></i>
                                    <span>Nemo enim ipsam voluptatem quia </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2"></i>
                                    <span>Sed perspiciatis iste natus error </span>
                                </li>
                            </ul>
                            <div class="pricing-btn">
                                <a href="{{ url('search') }}" class="btn btn-view">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="pricing-plans price-new">
                        <div class="pricing-planshead">
                            <h6>$150<span>/month</span></h6>
                            <h4>Professional</h4>
                            <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                        </div>
                        <div class="pricing-planscontent">
                            <ul>
                                <li>
                                    <i class="fa fa-check-circle me-2"></i>
                                    <span>Sed perspiciatis unde omnis natus error</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2"></i>
                                    <span>Lorem dolor consecteturadipiscing elit</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2"></i>
                                    <span>Duis irure dolor reprehenderit voluptate</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2"></i>
                                    <span>Nemo enim ipsam voluptatem quia </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2"></i>
                                    <span>Sed perspiciatis iste natus error </span>
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
    <section class="app-section-two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <div class="appimg aos" data-aos="fade-up">
                        <img src="{{ URL::asset('/assets/img/mobile.png') }}" class="img-fluid" alt="img">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="download-sec">
                        <div class="section-heading-two">
                            <p>Download App</p>
                            <h2>We're available on mobile Just download it!</h2>
                        </div>
                        <div class="heading aos" data-aos="fade-up">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                magna aliqua. Ut enim ad minimi ut aliquip ex ea commodo consequat.</p>
                            <h6>Scan the QR code to get the app now</h6>
                            <div class="scan-img">
                                <img src="{{ URL::asset('/assets/img/scan-img.png') }}" class="img-fluid"
                                    alt="img">
                            </div>
                        </div>
                        <div class="downlaod-btn aos" data-aos="fade-up">
                            <a href="javascript:;" target="_blank"><img src="{{ URL::asset('/assets/img/appstore.svg') }}"
                                    alt="img"></a>
                            <a href="javascript:;" target="_blank"><img src="{{ URL::asset('/assets/img/googleplay.svg') }}"
                                    alt="img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /App Section -->

    <!-- Client Section -->
    <section class="client-section-two">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading sec-header aos" data-aos="fade-up">
                        <h2>Testimonials</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur elit</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel client-slider">

                        <div class="client-box aos" data-aos="fade-up">
                            <div class="client-content">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <h6>“Quality service”</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi </p>
                            </div>
                            <div class="client-img">
                                <a href="javascript:;">
                                    <img class="img-fluid" alt="Image"
                                        src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}">
                                </a>
                                <div class="client-name">
                                    <h5>Sophie Moore</h5>
                                    <h6>Developer</h6>
                                </div>
                            </div>
                        </div>
                        <div class="client-box aos" data-aos="fade-up">
                            <div class="client-content">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <h6>“The best service”</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi </p>
                            </div>
                            <div class="client-img">
                                <a href="javascript:;">
                                    <img class="img-fluid" alt="Image"
                                        src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}">
                                </a>
                                <div class="client-name">
                                    <h5>Mike Hussy</h5>
                                    <h6>Tech Lead</h6>
                                </div>
                            </div>
                        </div>
                        <div class="client-box aos" data-aos="fade-up">
                            <div class="client-content">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <h6>“Service is good”</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi </p>
                            </div>
                            <div class="client-img">
                                <a href="javascript:;">
                                    <img class="img-fluid" alt="Image"
                                        src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg') }}">
                                </a>
                                <div class="client-name">
                                    <h5>Tom Beker</h5>
                                    <h6>CEO</h6>
                                </div>
                            </div>
                        </div>
                        <div class="client-box aos" data-aos="fade-up">
                            <div class="client-content">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <h6>“Good Maintanence”</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi </p>
                            </div>
                            <div class="client-img">
                                <a href="javascript:;">
                                    <img class="img-fluid" alt="Image"
                                        src="{{ URL::asset('/assets/img/profiles/avatar-04.jpg') }}">
                                </a>
                                <div class="client-name">
                                    <h5>Nick John</h5>
                                    <h6>Director</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Client Section -->

    <!-- Blog Section -->
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center aos" data-aos="fade-up">
                    <div class="section-heading sec-header">
                        <h2>Our Recent News & Blog</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex">
                    <div class="blog blog-new flex-fill aos" data-aos="fade-up">
                        <div class="blog-image">
                            <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                    src="{{ URL::asset('/assets/img/blog/blog-01.jpg') }}" alt="Post Image"></a>
                            <div class="date">
                                25<span>Dec</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-item">
                                <li>
                                    <div class="post-author">
                                        <a href="javascript:;"><i class="feather-user"></i><span>Hal Lewis</span></a>
                                    </div>
                                </li>
                                <li><i class="feather-message-square"></i>Comments (5)</li>
                            </ul>
                            <h3 class="blog-title">
                                <a href="{{ url('blog-details') }}">Lorem ipsum dolor sit amet, adipiscing elit, sed do
                                    eiusmod</a>
                            </h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium,eaque ipsa</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="blog blog-new flex-fill  aos" data-aos="fade-up">
                        <div class="blog-image">
                            <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                    src="{{ URL::asset('/assets/img/blog/blog-02.jpg') }}" alt="Post Image"></a>
                            <div class="date">
                                25<span>Dec</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-item">
                                <li>
                                    <div class="post-author">
                                        <a href="javascript:;"><i class="feather-user"></i><span>JohnDoe</span></a>
                                    </div>
                                </li>
                                <li><i class="feather-message-square"></i>Comments (5)</li>
                            </ul>
                            <h3 class="blog-title">
                                <a href="{{ url('blog-details') }}">Lorem ipsum dolor sit amet, adipiscing elit, sed do
                                    eiusmod</a>
                            </h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium,eaque ipsa</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="blog blog-new flex-fill aos" data-aos="fade-up">
                        <div class="blog-image">
                            <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                    src="{{ URL::asset('/assets/img/blog/blog-03.jpg') }}" alt="Post Image"></a>
                            <div class="date">
                                25<span>Dec</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-item">
                                <li>
                                    <div class="post-author">
                                        <a href="javascript:;"><i class="feather-user"></i><span>Greg Avery</span></a>
                                    </div>
                                </li>
                                <li><i class="feather-message-square"></i>Comments (5)</li>
                            </ul>
                            <h3 class="blog-title">
                                <a href="{{ url('blog-details') }}">Lorem ipsum dolor sit amet, adipiscing elit, sed do
                                    eiusmod</a>
                            </h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium,eaque ipsa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Blog Section -->

    <!-- Partners Section -->
    <section class="blog-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center aos " data-aos="fade-up">
                    <div class="section-heading sec-header">
                        <h2>Our Partners</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur elit</p>
                    </div>
                    <div class="owl-carousel partners-slider aos " data-aos="fade-up">
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
        </div>
    </section>
    <!-- Partners Section -->

    <!-- Free Trial -->
    <section class="section-offer">
        <div class="container">
            <div class="row  aos" data-aos="fade-up">
                <div class="col-md-12">
                    <div class="offer-paths offer-sec">
                        <div class="offer-path-content">
                            <div class="section-heading-two">
                                <p>14 Days Free Trial</p>
                                <h3 class="mb-0">We Are Offering 14 Days Free Trial</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore minim veniam, quis nostrud exercitation ullamco magna aliqua. </p>
                            <a href="{{ url('free-trial') }}" class="btn btn-views">Try 14 Days Free Trial<i
                                    class="feather-arrow-right-circle"></i></a>
                        </div>
                        <div class="offer-pathimg">
                            <img src="{{ URL::asset('/assets/img/offer-img.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Free Trial -->
    @component('components.model-popup')
    @endcomponent
    @component('components.scrollToTop')
    @endcomponent
@endsection
