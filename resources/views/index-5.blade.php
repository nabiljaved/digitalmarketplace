<?php $page = 'index-5'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="container">
        <div class="home-banner home-banner-three">
            <div class="row align-items-center w-100">
                <div class="col-lg-6 col-md-12 mx-auto">
                    <div class="section-search section-section-five">
                        <h1>The Largest Professional <span>Car</span> Wash</h1>
                        <h4>Search From 150 Awesome Verified Ads!</h4>
                        <p>
                            We value your time and therefore washing your car at our car
                            wash will take no more than 15 minutes.
                        </p>
                        <div class="search-box search-box-five">
                            <form action="search" class="search-box-form">
                                <div class="search-input">
                                    <div class="search-group-icon search-group-icon-5">
                                        <i class="feather-map-pin"></i>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>What</label>
                                        <select class="select">
                                            <option>Job Title, Keywords</option>
                                            <option>Tornoto</option>
                                            <option>Texas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="search-input">
                                    <div class="search-group-icon search-group-icon-5">
                                        <i class="feather-search"></i>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Where</label>
                                        <select class="select">
                                            <option>Choose Location </option>
                                            <option>Tornoto</option>
                                            <option>Texas</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="floating-img">
                        <img src="{{ URL::asset('/assets/img/audi.png') }}" alt="audi" class="img-fluid rotate-img">
                    </div>
                    <div class="car-five-arrow-img">
                        <img src="{{ URL::asset('/assets/img/car-five-arrow.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- /Banner Section -->

    <!-- Feature Section -->
    <section class="featured-categories-section">
        <div class="featured-category-bg-img">
            <img src="{{ URL::asset('/assets/img/car-category-five.png') }}" alt="">
        </div>
        <div class="container">
            <div class="floating-five-main">
                <div class="floating-five-buttom">
                    <div class="floating-five-buttom-all">
                        <h5>1430 k</h5>
                        <p>Cars Washed</p>
                    </div>
                    <div class="floating-five-buttom-img">
                        <i class="feather-users"></i>
                    </div>
                </div>
                <div class="floating-five-buttom">
                    <div class="floating-five-buttom-all">
                        <h5>987 k</h5>
                        <p>Happy Clients</p>
                    </div>
                    <div class="floating-five-buttom-img floating-fives-buttom-img">
                        <i class="feather-users"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading car-wash-heading car-wash-feature aos" data-aos="fade-up">
                        <div class="car-wash-img-five">
                            <img src="{{ URL::asset('/assets/img/icons/car-wash-header-1.svg') }}" alt=""
                                class="car-wash-header-one">
                            <h2>Featured Categories</h2>
                            <img src="{{ URL::asset('/assets/img/icons/car-wash-header-2.svg') }}" alt=""
                                class="car-wash-header-two">
                        </div>
                        <p>What do you need to find?</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-widget service-two aos" data-aos="fade-up">
                        <div class="service-img service-four-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/services/service-54.jpg') }}">
                            </a>
                        </div>
                        <div class="service-content service-content-five">
                            <div class="feature-content-bottom">
                                <p>Exterior Washing</p>
                                <a href="javascript:void(0);"><i class="feather-users me-2"></i>15</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-widget service-two aos" data-aos="fade-up">
                        <div class="service-img service-four-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/services/service-55.jpg') }}">
                            </a>
                        </div>
                        <div class="service-content service-content-five">
                            <div class="feature-content-bottom">
                                <p>Interior Washing</p>
                                <a href="javascript:void(0);"><i class="feather-users me-2"></i>05</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-widget service-two aos" data-aos="fade-up">
                        <div class="service-img service-four-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/services/service-56.jpg') }}">
                            </a>
                        </div>
                        <div class="service-content service-content-five">
                            <div class="feature-content-bottom">
                                <p>Vacuum Cleaning</p>
                                <a href="javascript:void(0);"><i class="feather-users me-2"></i>95</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-widget service-two aos" data-aos="fade-up">
                        <div class="service-img service-four-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/services/service-57.jpg') }}">
                            </a>
                        </div>
                        <div class="service-content service-content-five">
                            <div class="feature-content-bottom">
                                <p>Hand Car Wash</p>
                                <a href="javascript:void(0);"><i class="feather-users me-2"></i>23</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-widget service-two aos" data-aos="fade-up">
                        <div class="service-img service-four-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/services/service-58.jpg') }}">
                            </a>
                        </div>
                        <div class="service-content service-content-five">
                            <div class="feature-content-bottom">
                                <p>Chemical Car Wash</p>
                                <a href="javascript:void(0);"><i class="feather-users me-2"></i>10</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-widget service-two aos" data-aos="fade-up">
                        <div class="service-img service-four-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/services/service-59.jpg') }}">
                            </a>
                        </div>
                        <div class="service-content service-content-five">
                            <div class="feature-content-bottom">
                                <p>Steam Car Wash</p>
                                <a href="javascript:void(0);"><i class="feather-users me-2"></i>45</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Feature Section -->

    <!-- Featured Services -->
    <section class="feature-category-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading car-wash-heading aos" data-aos="fade-up">
                        <div class="car-wash-img-five">
                            <div class="car-wash-img-five">
                                <img src="{{ URL::asset('/assets/img/icons/car-wash-header-1.svg') }}" alt=""
                                    class="car-wash-header-one">
                                <h2>Featured Services</h2>
                                <img src="{{ URL::asset('/assets/img/icons/car-wash-header-2.svg') }}" alt=""
                                    class="car-wash-header-two">
                            </div>
                        </div>
                        <p>What do you need to find?</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-widget aos" data-aos="fade-up">
                        <div class="service-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/services/service-56.jpg') }}">
                            </a>
                            <div class="fav-item ">
                                <div class="features-service-five">
                                    <div class="features-service-rating">
                                        <i class="fas fa-star filled"></i><span>4.8</span>
                                    </div>
                                    <h6>Featured</h6>
                                </div>
                                <a href="javascript:void(0)" class="fav-icon fav-icon-five">
                                    <i class="feather-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="service-content service-feature-five">
                            <h3 class="title">
                                <a href="{{ url('service-details') }}">Basic Washing - Compact SUVs</a>
                            </h3>
                            <p><i class="feather-map-pin"></i>New Jersey, USA</p>
                            <div class="feature-services-five">
                                <h6>$50.00</h6><span>$35.00</span>
                            </div>
                            <div class="feature-service-botton">
                                <div class="feature-service-btn">
                                    <a href="{{ url('service-details') }}">Book Service</a>
                                </div>
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-widget aos" data-aos="fade-up">
                        <div class="service-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/services/service-57.jpg') }}">
                            </a>
                            <div class="fav-item ">
                                <div class="features-service-five">
                                    <div class="features-service-rating">
                                        <i class="fas fa-star filled"></i><span>3.8</span>
                                    </div>
                                    <h6>Featured</h6>
                                </div>
                                <a href="javascript:void(0)" class="fav-icon fav-icon-five">
                                    <i class="feather-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="service-content service-feature-five">
                            <h3 class="title">
                                <a href="{{ url('service-details') }}">Interior Washing - Compact SUV</a>
                            </h3>
                            <p><i class="feather-map-pin"></i>New Jersey, USA</p>
                            <div class="feature-services-five">
                                <h6>$78.00</h6><span>$25.00</span>
                            </div>
                            <div class="feature-service-botton">
                                <div class="feature-service-btn">
                                    <a href="{{ url('service-details') }}">Book Service</a>
                                </div>
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-12.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-widget aos" data-aos="fade-up">
                        <div class="service-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/services/service-58.jpg') }}">
                            </a>
                            <div class="fav-item ">
                                <div class="features-service-five">
                                    <div class="features-service-rating">
                                        <i class="fas fa-star filled"></i><span>3.4</span>
                                    </div>
                                    <h6>Featured</h6>
                                </div>
                                <a href="javascript:void(0)" class="fav-icon fav-icon-five">
                                    <i class="feather-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="service-content service-feature-five">
                            <h3 class="title">
                                <a href="{{ url('service-details') }}">Vacuum Washing - Compact SUV</a>
                            </h3>
                            <p><i class="feather-map-pin"></i>New Jersey, USA</p>
                            <div class="feature-services-five">
                                <h6>$52.00</h6><span>$35.00</span>
                            </div>
                            <div class="feature-service-botton">
                                <div class="feature-service-btn">
                                    <a href="javascript:;">Book Service</a>
                                </div>
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-13.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-widget aos" data-aos="fade-up">
                        <div class="service-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/services/service-59.jpg') }}">
                            </a>
                            <div class="fav-item ">
                                <div class="features-service-five">
                                    <div class="features-service-rating">
                                        <i class="fas fa-star filled"></i><span>3.9</span>
                                    </div>
                                    <h6>Featured</h6>
                                </div>
                                <a href="javascript:void(0)" class="fav-icon fav-icon-five">
                                    <i class="feather-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="service-content service-feature-five">
                            <h3 class="title">
                                <a href="{{ url('service-details') }}">Car Wash and Glassing</a>
                            </h3>
                            <p><i class="feather-map-pin"></i>New Jersey, USA</p>
                            <div class="feature-services-five">
                                <h6>$50.00</h6><span>$35.00</span>
                            </div>
                            <div class="feature-service-botton">
                                <div class="feature-service-btn">
                                    <a href="{{ url('service-details') }}">Book Service</a>
                                </div>
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-widget aos" data-aos="fade-up">
                        <div class="service-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/services/service-54.jpg') }}">
                            </a>
                            <div class="fav-item ">
                                <div class="features-service-five">
                                    <div class="features-service-rating">
                                        <i class="fas fa-star filled"></i><span>4.8</span>
                                    </div>
                                    <h6>Featured</h6>
                                </div>
                                <a href="javascript:void(0)" class="fav-icon fav-icon-five">
                                    <i class="feather-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="service-content service-feature-five">
                            <h3 class="title">
                                <a href="{{ url('service-details') }}">Express washing</a>
                            </h3>
                            <p><i class="feather-map-pin"></i>New Jersey, USA</p>
                            <div class="feature-services-five">
                                <h6>$50.00</h6><span>$35.00</span>
                            </div>
                            <div class="feature-service-botton">
                                <div class="feature-service-btn">
                                    <a href="{{ url('service-details') }}">Book Service</a>
                                </div>
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-20.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-widget aos" data-aos="fade-up">
                        <div class="service-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/services/service-55.jpg') }}">
                            </a>
                            <div class="fav-item ">
                                <div class="features-service-five">
                                    <div class="features-service-rating">
                                        <i class="fas fa-star filled"></i><span>4.8</span>
                                    </div>
                                    <h6>Featured</h6>
                                </div>
                                <a href="javascript:void(0)" class="fav-icon fav-icon-five">
                                    <i class="feather-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="service-content service-feature-five">
                            <h3 class="title">
                                <a href="{{ url('service-details') }}">Exterior Washing</a>
                            </h3>
                            <p><i class="feather-map-pin"></i>New Jersey, USA</p>
                            <div class="feature-services-five">
                                <h6>$50.00</h6><span>$35.00</span>
                            </div>
                            <div class="feature-service-botton">
                                <div class="feature-service-btn">
                                    <a href="{{ url('service-details') }}">Book Service</a>
                                </div>
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-sec btn-sec-five aos" data-aos="fade-up">
                <a href="{{ url('search') }}" class="btn btn-primary btn-view">View All</a>
            </div>
        </div>
    </section>
    <!-- /Featured Services -->

    <!-- Providers Section -->
    <section class="providers-section-five">
        <div class="providers-five-bg-car">
            <img src="{{ URL::asset('/assets/img/car-provider-bg.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading car-wash-heading aos" data-aos="fade-up">
                        <div class="car-wash-img-five">
                            <img src="{{ URL::asset('/assets/img/icons/car-wash-header-1.svg') }}" alt=""
                                class="car-wash-header-one">
                            <h2>Top Providers</h2>
                            <img src="{{ URL::asset('/assets/img/icons/car-wash-header-2.svg') }}" alt=""
                                class="car-wash-header-two">
                        </div>
                        <p>Meet Our Experts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel top-providers-five">
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="{{ url('provider-details') }}">
                                    <img src="{{ URL::asset('/assets/img/provider/provider-01.jpg') }}" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <h4><a href="{{ url('provider-details') }}">John Smith</a><i class="fa fa-check-circle"
                                        aria-hidden="true"></i></h4>
                                <h5>Electrician</h5>
                                <div class="providerset-prices">
                                    <h6>$20.00<span>/hr</span></h6>
                                </div>
                                <div class="provider-rating">
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
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="{{ url('provider-details') }}">
                                    <img src="{{ URL::asset('/assets/img/provider/provider-02.jpg') }}" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <h4><a href="{{ url('provider-details') }}">John Smith</a><i class="fa fa-check-circle"
                                        aria-hidden="true"></i></h4>
                                <h5>Electrician</h5>
                                <div class="providerset-prices">
                                    <h6>$20.00<span>/hr</span></h6>
                                </div>
                                <div class="provider-rating">
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
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="{{ url('provider-details') }}">
                                    <img src="{{ URL::asset('/assets/img/provider/provider-03.jpg') }}" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <h4><a href="{{ url('provider-details') }}">John Smith</a><i class="fa fa-check-circle"
                                        aria-hidden="true"></i></h4>
                                <h5>Electrician</h5>
                                <div class="providerset-prices">
                                    <h6>$20.00<span>/hr</span></h6>
                                </div>
                                <div class="provider-rating">
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
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="{{ url('provider-details') }}">
                                    <img src="{{ URL::asset('/assets/img/provider/provider-04.jpg') }}" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <h4><a href="{{ url('provider-details') }}">John Smith</a><i class="fa fa-check-circle"
                                        aria-hidden="true"></i></h4>
                                <h5>Electrician</h5>
                                <div class="providerset-prices">
                                    <h6>$20.00<span>/hr</span></h6>
                                </div>
                                <div class="provider-rating">
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
                        <div class="providerset">
                            <div class="providerset-img">
                                <a href="{{ url('provider-details') }}">
                                    <img src="{{ URL::asset('/assets/img/provider/provider-05.jpg') }}" alt="img">
                                </a>
                            </div>
                            <div class="providerset-content">
                                <h4><a href="{{ url('provider-details') }}">John Smith</a><i class="fa fa-check-circle"
                                        aria-hidden="true"></i></h4>
                                <h5>Electrician</h5>
                                <div class="providerset-prices">
                                    <h6>$20.00<span>/hr</span></h6>
                                </div>
                                <div class="provider-rating">
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
    </section>
    <!-- Providers Section -->

    <!-- How It Works -->
    <section class="works-five-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading car-wash-heading aos" data-aos="fade-up">
                        <div class="car-wash-img-five">
                            <img src="{{ URL::asset('/assets/img/icons/car-wash-header-1.svg') }}" alt=""
                                class="car-wash-header-one">
                            <h2>Featured Categories</h2>
                            <img src="{{ URL::asset('/assets/img/icons/car-wash-header-2.svg') }}" alt=""
                                class="car-wash-header-two">
                        </div>
                        <p>What do you need to find?</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="works-it-five-button-main">
                        <div class="works-it-five-button">
                            <h4>01</h4>
                        </div>
                        <div class="works-it-dots">
                            <span></span>
                        </div>
                        <div class="works-it-lines">
                            <span></span>
                        </div>
                    </div>
                    <div class="works-five-main">
                        <div class="works-five-img">
                            <img src="{{ URL::asset('/assets/img/works-3.jpg') }}" alt="">
                        </div>
                        <div class="works-five-bottom">
                            <h5>Express washing</h5>
                            <p>Car wash will take no more than
                                15 minutes.</p>
                            <i class="feather-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="works-it-five-button-main">
                        <div class="works-it-five-button">
                            <h4>02</h4>
                        </div>
                        <div class="works-it-dots">
                            <span></span>
                        </div>
                        <div class="works-it-lines">
                            <span></span>
                        </div>
                    </div>
                    <div class="works-five-main">
                        <div class="works-five-img">
                            <img src="{{ URL::asset('/assets/img/works-2.jpg') }}" alt="">
                        </div>
                        <div class="works-five-bottom">
                            <h5>Express washing</h5>
                            <p>Car wash will take no more than
                                15 minutes.</p>
                            <i class="feather-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="works-it-five-button-main">
                        <div class="works-it-five-button">
                            <h4>03</h4>
                        </div>
                        <div class="works-it-dots">
                            <span></span>
                        </div>
                    </div>
                    <div class="works-five-main">
                        <div class="works-five-img">
                            <img src="{{ URL::asset('/assets/img/works-1.jpg') }}" alt="">
                        </div>
                        <div class="works-five-bottom">
                            <h5>Express washing</h5>
                            <p>Car wash will take no more than
                                15 minutes.</p>
                            <i class="feather-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offering-five-all">
                <div class="offering-five-all-img">
                    <img src="{{ URL::asset('/assets/img/bubbles-offering-section.png') }}" alt="">
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="offering-five-main">
                            <h2>We Are Offering 14 Days Free Trial</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore
                                et dolore minim veniam, quis nostrud exercitation ullamco magna aliqua. </p>
                            <div class="offering-five-button">
                                <a href="" class="btn btn-primary">Try 14 Days Free Trial<i
                                        class="feather-arrow-right-circle"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="offering-five-img">
                            <img src="{{ URL::asset('/assets/img/offering-worker.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /How It Works -->

    <!-- Featured Services -->
    <section class="feature-category-section-five">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading car-wash-heading aos" data-aos="fade-up">
                        <div class="car-wash-img-five">
                            <img src="{{ URL::asset('/assets/img/icons/car-wash-header-1.svg') }}" alt=""
                                class="car-wash-header-one">
                            <h2>Featured Services</h2>
                            <img src="{{ URL::asset('/assets/img/icons/car-wash-header-2.svg') }}" alt=""
                                class="car-wash-header-two">
                        </div>
                        <p>What do you need to find?</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel feature-service-five-slider">
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-56.jpg') }}">
                                </a>
                                <div class="fav-item ">
                                    <div class="features-service-five">
                                        <div class="features-service-rating">
                                            <i class="fas fa-star filled"></i><span>4.8</span>
                                        </div>
                                        <h6>Featured</h6>
                                    </div>
                                    <a href="javascript:void(0)" class="fav-icon fav-icon-five">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content service-feature-five">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Basic Washing - Compact SUVs</a>
                                </h3>
                                <p><i class="feather-map-pin"></i>New Jersey, USA</p>
                                <div class="feature-services-five">
                                    <h6>$50.00</h6><span>$35.00</span>
                                </div>
                                <div class="feature-service-botton feature-service-botton-five">
                                    <div class="feature-service-btn">
                                        <a href="javascript:void(0)">Book Service</a>
                                    </div>
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-57.jpg') }}">
                                </a>
                                <div class="fav-item ">
                                    <div class="features-service-five">
                                        <div class="features-service-rating">
                                            <i class="fas fa-star filled"></i><span>4.8</span>
                                        </div>
                                        <h6>Featured</h6>
                                    </div>
                                    <a href="javascript:void(0)" class="fav-icon fav-icon-five">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content service-feature-five">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Basic Washing - Compact SUVs</a>
                                </h3>
                                <p><i class="feather-map-pin"></i>New Jersey, USA</p>
                                <div class="feature-services-five">
                                    <h6>$50.00</h6><span>$35.00</span>
                                </div>
                                <div class="feature-service-botton feature-service-botton-five">
                                    <div class="feature-service-btn">
                                        <a href="javascript:void(0)">Book Service</a>
                                    </div>
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-12.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-58.jpg') }}">
                                </a>
                                <div class="fav-item ">
                                    <div class="features-service-five">
                                        <div class="features-service-rating">
                                            <i class="fas fa-star filled"></i><span>4.8</span>
                                        </div>
                                        <h6>Featured</h6>
                                    </div>
                                    <a href="javascript:void(0)" class="fav-icon fav-icon-five">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content service-feature-five">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Basic Washing - Compact SUVs</a>
                                </h3>
                                <p><i class="feather-map-pin"></i>New Jersey, USA</p>
                                <div class="feature-services-five">
                                    <h6>$50.00</h6><span>$35.00</span>
                                </div>
                                <div class="feature-service-botton feature-service-botton-five">
                                    <div class="feature-service-btn">
                                        <a href="javascript:void(0)">Book Service</a>
                                    </div>
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-13.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-56.jpg') }}">
                                </a>
                                <div class="fav-item ">
                                    <div class="features-service-five">
                                        <div class="features-service-rating">
                                            <i class="fas fa-star filled"></i><span>4.8</span>
                                        </div>
                                        <h6>Featured</h6>
                                    </div>
                                    <a href="javascript:void(0)" class="fav-icon fav-icon-five">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content service-feature-five">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Basic Washing - Compact SUVs</a>
                                </h3>
                                <p><i class="feather-map-pin"></i>New Jersey, USA</p>
                                <div class="feature-services-five">
                                    <h6>$50.00</h6><span>$35.00</span>
                                </div>
                                <div class="feature-service-botton feature-service-botton-five">
                                    <div class="feature-service-btn">
                                        <a href="javascript:void(0)">Book Service</a>
                                    </div>
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Featured Services -->

    <!-- pricing Section -->
    <section class="pricing-service-five">
        <div class="pricing-service-topimg">
            <img src="{{ URL::asset('/assets/img/bubbles-bottom-section-pricing-1.png') }}" alt=""
                class="pricing-five-img-one">
            <img src="{{ URL::asset('/assets/img/bubbles-bottom-section-pricing-2.png') }}" alt=""
                class="pricing-five-img-two">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading car-wash-heading aos" data-aos="fade-up">
                        <div class="car-wash-img-five">
                            <img src="{{ URL::asset('/assets/img/icons/car-wash-header-1.svg') }}" alt=""
                                class="car-wash-header-one">
                            <h2>Pricing Plans</h2>
                            <img src="{{ URL::asset('/assets/img/icons/car-wash-header-2.svg') }}" alt=""
                                class="car-wash-header-two">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">MONTHLY</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">YEARLY</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row aos" data-aos="fade-up">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="pricing-plans pricing-plans-five">
                                <div class="pricing-planshead-five">
                                    <div class="providerset-prices-five">
                                        <h6>$20</h6><span>/month</span>
                                    </div>
                                    <h4>Standard Pack</h4>
                                </div>
                                <div class="pricing-planscontent pricing-planscontent-five">
                                    <ul>
                                        <li>
                                            <span>Unleash the power of automation</span>
                                        </li>
                                        <li>
                                            <i class="feather-check me-2 text-success"></i>
                                            <span>Exterior Washing</span>
                                        </li>
                                        <li>
                                            <i class="feather-check me-2 text-success"></i>
                                            <span>Vacuum Cleaning</span>
                                        </li>
                                        <li>
                                            <i class="feather-x me-2 text-danger"></i>
                                            <span>Interior Wet Cleaning</span>
                                        </li>
                                        <li>
                                            <i class="feather-x me-2 text-danger"></i>
                                            <span>Window Wiping</span>
                                        </li>
                                    </ul>
                                    <div class="pricing-btn-five">
                                        <a href="{{ url('pricing') }}" class="btn btn-primary btn-view">Choose plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="pricing-plans pricing-plans-five">
                                <div class="pricing-planshead-five">
                                    <div class="providerset-prices-five">
                                        <h6>$54</h6><span>/month</span>
                                    </div>
                                    <h4>Premium Pack</h4>
                                </div>
                                <div class="pricing-planscontent pricing-planscontent-five">
                                    <ul>
                                        <li>
                                            <span>Unleash the power of automation</span>
                                        </li>
                                        <li>
                                            <i class="feather-check me-2 text-success"></i>
                                            <span>Exterior Washing</span>
                                        </li>
                                        <li>
                                            <i class="feather-check me-2 text-success"></i>
                                            <span>Vacuum Cleaning</span>
                                        </li>
                                        <li>
                                            <i class="feather-x me-2 text-danger"></i>
                                            <span>Interior Wet Cleaning</span>
                                        </li>
                                        <li>
                                            <i class="feather-x me-2 text-danger"></i>
                                            <span>Window Wiping</span>
                                        </li>
                                    </ul>
                                    <div class="pricing-btn-five">
                                        <a href="{{ url('pricing') }}" class="btn btn-primary btn-view">Choose plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="pricing-plans pricing-plans-five">
                                <div class="pricing-planshead-five">
                                    <div class="providerset-prices-five">
                                        <h6>$89</h6><span>/month</span>
                                    </div>
                                    <h4>Ultimate Pack</h4>
                                </div>
                                <div class="pricing-planscontent pricing-planscontent-five">
                                    <ul>
                                        <li>
                                            <span>Unleash the power of automation</span>
                                        </li>
                                        <li>
                                            <i class="feather-check me-2 text-success"></i>
                                            <span>Exterior Washing</span>
                                        </li>
                                        <li>
                                            <i class="feather-check me-2 text-success"></i>
                                            <span>Vacuum Cleaning</span>
                                        </li>
                                        <li>
                                            <i class="feather-x me-2 text-danger"></i>
                                            <span>Interior Wet Cleaning</span>
                                        </li>
                                        <li>
                                            <i class="feather-x me-2 text-danger"></i>
                                            <span>Window Wiping</span>
                                        </li>
                                    </ul>
                                    <div class="pricing-btn-five">
                                        <a href="{{ url('pricing') }}" class="btn btn-primary btn-view">Choose plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row aos" data-aos="fade-up">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="pricing-plans pricing-plans-five">
                                <div class="pricing-planshead-five">
                                    <div class="providerset-prices-five">
                                        <h6>$20</h6><span>/month</span>
                                    </div>
                                    <h4>Standard Pack</h4>
                                </div>
                                <div class="pricing-planscontent pricing-planscontent-five">
                                    <ul>
                                        <li>
                                            <span>Unleash the power of automation</span>
                                        </li>
                                        <li>
                                            <i class="feather-check me-2 text-success"></i>
                                            <span>Exterior Washing</span>
                                        </li>
                                        <li>
                                            <i class="feather-check me-2 text-success"></i>
                                            <span>Vacuum Cleaning</span>
                                        </li>
                                        <li>
                                            <i class="feather-x me-2 text-danger"></i>
                                            <span>Interior Wet Cleaning</span>
                                        </li>
                                        <li>
                                            <i class="feather-x me-2 text-danger"></i>
                                            <span>Window Wiping</span>
                                        </li>
                                    </ul>
                                    <div class="pricing-btn-five">
                                        <a href="{{ url('pricing') }}" class="btn btn-primary btn-view">Choose plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="pricing-plans pricing-plans-five">
                                <div class="pricing-planshead-five">
                                    <div class="providerset-prices-five">
                                        <h6>$54</h6><span>/month</span>
                                    </div>
                                    <h4>Premium Pack</h4>
                                </div>
                                <div class="pricing-planscontent pricing-planscontent-five">
                                    <ul>
                                        <li>
                                            <span>Unleash the power of automation</span>
                                        </li>
                                        <li>
                                            <i class="feather-check me-2 text-success"></i>
                                            <span>Exterior Washing</span>
                                        </li>
                                        <li>
                                            <i class="feather-check me-2 text-success"></i>
                                            <span>Vacuum Cleaning</span>
                                        </li>
                                        <li>
                                            <i class="feather-x me-2 text-danger"></i>
                                            <span>Interior Wet Cleaning</span>
                                        </li>
                                        <li>
                                            <i class="feather-x me-2 text-danger"></i>
                                            <span>Window Wiping</span>
                                        </li>
                                    </ul>
                                    <div class="pricing-btn-five">
                                        <a href="{{ url('search') }}" class="btn btn-primary btn-view">Choose plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="pricing-plans pricing-plans-five">
                                <div class="pricing-planshead-five">
                                    <div class="providerset-prices-five">
                                        <h6>$89</h6><span>/month</span>
                                    </div>
                                    <h4>Ultimate Pack</h4>
                                </div>
                                <div class="pricing-planscontent pricing-planscontent-five">
                                    <ul>
                                        <li>
                                            <span>Unleash the power of automation</span>
                                        </li>
                                        <li>
                                            <i class="feather-check me-2 text-success"></i>
                                            <span>Exterior Washing</span>
                                        </li>
                                        <li>
                                            <i class="feather-check me-2 text-success"></i>
                                            <span>Vacuum Cleaning</span>
                                        </li>
                                        <li>
                                            <i class="feather-x me-2 text-danger"></i>
                                            <span>Interior Wet Cleaning</span>
                                        </li>
                                        <li>
                                            <i class="feather-x me-2 text-danger"></i>
                                            <span>Window Wiping</span>
                                        </li>
                                    </ul>
                                    <div class="pricing-btn-five">
                                        <a href="{{ url('search') }}" class="btn btn-primary btn-view">Choose plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /pricing Section -->

    <!-- testimonals section -->
    <section class="testimonals-five-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading car-wash-heading aos" data-aos="fade-up">
                        <div class="car-wash-img-five">
                            <img src="{{ URL::asset('/assets/img/icons/car-wash-header-1.svg') }}" alt=""
                                class="car-wash-header-one">
                            <h2>Our testimonials</h2>
                            <img src="{{ URL::asset('/assets/img/icons/car-wash-header-2.svg') }}" alt=""
                                class="car-wash-header-two">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="car-wash-bg-five-main">
                        <div class="car-wash-bg-five">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="owl-carousel car-testimonials-five-slider">
                                        <div class="testimonials-five-top">
                                            <div class="test-five-img">
                                                <img src="{{ URL::asset('/assets/img/profiles/avatar-07.jpg') }}"
                                                    alt="">
                                            </div>
                                            <h2>Best Design and delivered in time</h2>
                                            <p>Nay likely her length sooner thrown sex lively income. The expense windows
                                                adapted
                                                sir. Wrong widen drawn ample eat off doors money. Offending belonging
                                                promotion
                                                provision an be oh consulted ourselves it. Blessing welcomed ladyship she
                                                met
                                                humoured sir breeding her. Six curiosity day assurance bed necessary.</p>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fa-solid fa-star-half-stroke filled"></i>
                                            </div>
                                            <h5>Mansur</h5>
                                            <h6>CEO @ airbnb</h6>
                                        </div>
                                        <div class="testimonials-five-top">
                                            <div class="test-five-img">
                                                <img src="{{ URL::asset('/assets/img/profiles/avatar-08.jpg') }}"
                                                    alt="">
                                            </div>
                                            <h2>Best Design and delivered in time</h2>
                                            <p>Nay likely her length sooner thrown sex lively income. The expense windows
                                                adapted
                                                sir. Wrong widen drawn ample eat off doors money. Offending belonging
                                                promotion
                                                provision an be oh consulted ourselves it. Blessing welcomed ladyship she
                                                met
                                                humoured sir breeding her. Six curiosity day assurance bed necessary.</p>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </div>
                                            <h5>Mansur</h5>
                                            <h6>CEO @ airbnb</h6>
                                        </div>
                                        <div class="testimonials-five-top">
                                            <div class="test-five-img">
                                                <img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg') }}"
                                                    alt="">
                                            </div>
                                            <h2>Best Design and delivered in time</h2>
                                            <p>Nay likely her length sooner thrown sex lively income. The expense windows
                                                adapted
                                                sir. Wrong widen drawn ample eat off doors money. Offending belonging
                                                promotion
                                                provision an be oh consulted ourselves it. Blessing welcomed ladyship she
                                                met
                                                humoured sir breeding her. Six curiosity day assurance bed necessary.</p>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </div>
                                            <h5>Mansur</h5>
                                            <h6>CEO @ airbnb</h6>
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
    <!-- /testimonals section -->
    <!-- Partners Section -->
    <section class="blog-section blog-five-section">
        <div class="container">
            <div class="col-md-12 text-center">
                <div class="section-heading car-wash-heading aos" data-aos="fade-up">
                    <div class="car-wash-img-five">
                        <img src="{{ URL::asset('/assets/img/icons/car-wash-header-1.svg') }}" alt=""
                            class="car-wash-header-one">
                        <h2>Our Partner</h2>
                        <img src="{{ URL::asset('/assets/img/icons/car-wash-header-2.svg') }}" alt=""
                            class="car-wash-header-two">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
            </div>
            <div class="owl-carousel partners-five-slider aos " data-aos="fade-up">
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
    </section>
    <!-- Partners Section -->

    <!-- Service Section -->
    <section class="car-blogs-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading car-wash-heading aos" data-aos="fade-up">
                        <div class="car-wash-img-five">
                            <img src="{{ URL::asset('/assets/img/icons/car-wash-header-1.svg') }}" alt=""
                                class="car-wash-header-one">
                            <h2>Our Blogs</h2>
                            <img src="{{ URL::asset('/assets/img/icons/car-wash-header-2.svg') }}" alt=""
                                class="car-wash-header-two">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel car-blog-slider">

                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-51.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('categories') }}"><span
                                            class="item-cat item-car">22-12-2023</span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">The Benefits Of Keeping Company Cars Clean</a>
                                </h3>
                                <p>Donec vel pellentesque nisl, molestie tempus ligula. Cras massa turpis, pretium
                                    nec placerat ornare, sodales ac urna. Sed commodo semper fermentum.</p>
                                <div class="serv-info">
                                    <a href="{{ url('service-details') }}" class="btn btn-book">Read More</a>
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-17.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('blog-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-52.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('blog-details') }}"><span
                                            class="item-cat item-car">17-12-2023</span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ url('blog-details') }}">What Has Changed In The Hand Car Wash
                                        Industry?</a>
                                </h3>
                                <p>Donec vel pellentesque nisl, molestie tempus ligula. Cras massa turpis, pretium
                                    nec placerat ornare, sodales ac urna. Sed commodo semper fermentum.</p>
                                <div class="serv-info">
                                    <a href="{{ url('blog-details') }}" class="btn btn-book">Read More</a>
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-18.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('blog-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-53.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('blog-details') }}"><span
                                            class="item-cat item-car">28-02-2023</span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ url('blog-details') }}">The Benefits Of Keeping Company Cars Clean</a>
                                </h3>
                                <p>Donec vel pellentesque nisl, molestie tempus ligula. Cras massa turpis, pretium
                                    nec placerat ornare, sodales ac urna. Sed commodo semper fermentum.</p>
                                <div class="serv-info">
                                    <a href="{{ url('blog-details') }}" class="btn btn-book">Read More</a>
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-19.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('blog-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-51.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('blog-details') }}"><span
                                            class="item-cat item-car">17-12-2023</span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ url('blog-details') }}">What Has Changed In The Hand Car Wash
                                        Industry?</a>
                                </h3>
                                <p>Donec vel pellentesque nisl, molestie tempus ligula. Cras massa turpis, pretium
                                    nec placerat ornare, sodales ac urna. Sed commodo semper fermentum.</p>
                                <div class="serv-info">
                                    <a href="{{ url('blog-details') }}" class="btn btn-book">Read More</a>
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-18.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('blog-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-52.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <a href="{{ url('blog-details') }}"><span
                                            class="item-cat item-car">17-12-2023</span></a>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="{{ url('blog-details') }}">What Has Changed In The Hand Car Wash
                                        Industry?</a>
                                </h3>
                                <p>Donec vel pellentesque nisl, molestie tempus ligula. Cras massa turpis, pretium
                                    nec placerat ornare, sodales ac urna. Sed commodo semper fermentum.</p>
                                <div class="serv-info">
                                    <a href="{{ url('blog-details') }}" class="btn btn-book">Read More</a>
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-18.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Section -->

    <!-- App Section -->
    <section class="app-five-section">
        <div class="container">
            <div class="app-sec app-sec-five">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="col-md-12">
                            <div class="heading aos" data-aos="fade-up">
                                <h2>Download Our App</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <h6>Scan the QR code to get the app now</h6>

                            </div>
                        </div>
                        <div class="downlaod-btn aos" data-aos="fade-up">
                            <div class="scan-img">
                                <img src="{{ URL::asset('/assets/img/scan-img.png') }}" class="img-fluid"
                                    alt="img">
                            </div>
                            <a href="javascript:;" target="_blank">
                                <img src="{{ URL::asset('/assets/img/googleplay-five.png') }}" alt="img">
                            </a>
                            <a href="javascript:;" target="_blank">
                                <img src="{{ URL::asset('/assets/img/apple-five.png') }}" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="appimg-set aos" data-aos="fade-up">
                            <img src="{{ URL::asset('/assets/img/app-sec-five.png') }}" class="img-fluid"
                                alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /App Section -->
    @component('components.model-popup')
    @endcomponent
    @component('components.scrollToTop')
    @endcomponent
@endsection
