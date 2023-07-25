<?php $page = 'index-3'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Banner Section -->
    <section class="hero-section-three">
        <div class="container">
            <div class="home-banner home-banner-three aos" data-aos="fade-up">
                <div class="row align-items-center w-100">
                    <div class="col-lg-6 col-md-12 mx-auto">
                        <div class="section-search section-section-three">
                            <h4>Best Saloon Template</h4>
                            <h1>Find the Awesome Saloon’s Near you</h1>
                            <p>Hair and SPA Salons and fully integrated with theme tools that you can use for the promotion
                                of your business.</p>
                            <a href="javascript:void(0);" class="make-appointment">MAKE AN APPOINTMENT</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    </div>
                </div>
            </div>
            <div class="search-box search-box-three aos" data-aos="fade-up">
                <form action="listing-grid-sidebar" class="d-flex search-form-profile">
                    <div class="searchbox-list">
                        <div class="search-input search-input-three">
                            <i class="feather-check-square"></i>
                            <div class="form-group">
                                <select class="select">
                                    <option>Select Service type</option>
                                    <option>Tornoto</option>
                                    <option>Texas</option>
                                </select>
                            </div>
                        </div>
                        <div class="search-input search-input-three">
                            <i class="feather-map-pin me-2"></i>
                            <div class="form-group mb-0">
                                <input class="form-control" type="text" placeholder="Location">
                            </div>
                        </div>
                        <div class="search-input search-input-three">
                            <i class="feather-calendar me-2"></i>
                            <div class="form-group mb-0">
                                <input class="form-control datetimepicker" type="text" placeholder="Add Date">
                            </div>
                        </div>
                    </div>
                    <div class="search-btn search-btn-three">

                        <button class="btn btn-primary" type="submit"><i class="feather-search me-2"></i>SEARCH
                            HERE</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /Banner Section -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="services-header aos" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-content">
                            <h2>Our Services</h2>
                            <div class="our-img-all">
                                <img src="{{ URL::asset('/assets/img/icons/scissor.svg') }}" alt="">
                            </div>
                            <p>Our Barbershop & Tattoo Salon provides classic services combined with innovative techniques.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel services-slider aos" data-aos="fade-up">
                        <div class="services-all">
                            <div class="services-main-img">
                                <a href="">
                                    <img class="img-fluid serv-image" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-20.png') }}">
                                </a>
                                <div class="service-foot">
                                    <img src="{{ URL::asset('/assets/img/icons/saloon-service-2.svg') }}" alt="">
                                    <h4>Haircut</h4>
                                    <h6>25 Saloons</h6>
                                </div>
                            </div>
                        </div>
                        <div class="services-all">
                            <div class="services-main-img">
                                <a href="">
                                    <img class="img-fluid serv-image" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-21.png') }}">
                                </a>
                                <div class="service-foot">
                                    <img src="{{ URL::asset('/assets/img/icons/saloon-service-2.svg') }}" alt="">
                                    <h4>Trimming</h4>
                                    <h6>25 Saloons</h6>
                                </div>
                            </div>
                        </div>
                        <div class="services-all">
                            <div class="services-main-img">
                                <a href="">
                                    <img class="img-fluid serv-image" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-22.png') }}">
                                </a>
                                <div class="service-foot">
                                    <img src="{{ URL::asset('/assets/img/icons/saloon-service-2.svg') }}" alt="">
                                    <h4>Saloons</h4>
                                    <h6>25 Saloons</h6>
                                </div>
                            </div>
                        </div>
                        <div class="services-all">
                            <div class="services-main-img">
                                <a href="">
                                    <img class="img-fluid serv-image" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-23.png') }}">
                                </a>
                                <div class="service-foot">
                                    <img src="{{ URL::asset('/assets/img/icons/saloon-service-2.svg') }}" alt="">
                                    <h4>Shaving</h4>
                                    <h6>25 Saloons</h6>
                                </div>
                            </div>
                        </div>
                        <div class="services-all">
                            <div class="services-main-img">
                                <a href="">
                                    <img class="img-fluid serv-image" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-20.png') }}">
                                </a>
                                <div class="service-foot">
                                    <img src="{{ URL::asset('/assets/img/icons/saloon-service-2.svg') }}" alt="">
                                    <h4>Haircut</h4>
                                    <h6>25 Saloons</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidecircle-ryt">
            <img src="{{ URL::asset('/assets/img/side-circle.png') }}" alt="">
        </div>
    </section>
    <!-- /service Section -->

    <!-- Service Section -->
    <section class="service-section featured-saloons">
        <div class="saloon-section-circle">
            <img src="{{ URL::asset('/assets/img/side-circle.png') }}" alt="">
        </div>
        <div class="container">
            <div class="services-header aos" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-content">
                            <h2>Featured Saloons</h2>
                            <div class="our-img-all">
                                <img src="{{ URL::asset('/assets/img/icons/scissor.svg') }}" alt="">
                            </div>
                            <p>Our Barbershop & Tattoo Salon provides classic services combined with innovative techniques.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service-slider aos" data-aos="fade-right">
                        <div class="service-widget">
                            <div class="service-img service-show-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-24.jpg') }}">
                                </a>
                                <div class="item-info item-infos">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content service-content-three">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">The Rockstar Barber</a>
                                </h3>
                                <ul>
                                    <li>Hair Cut</li>
                                    <li>Hair Styling</li>
                                    <li>Clean Shaving</li>
                                    <li>Face Cleaning</li>
                                </ul>
                                <div class="main-saloons-profile">
                                    <div class="saloon-profile-left">
                                        <div class="saloon-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-20.jpg') }}"
                                                alt="">
                                        </div>
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
                                        <span>$70</span>
                                    </div>
                                </div>
                                <div class="saloon-bottom">
                                    <a href="{{ url('service-details') }}"><i class="feather-calendar me-2"></i>MAKE AN
                                        APPOINTMENT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service-slider aos" data-aos="fade-up">
                        <div class="service-widget">
                            <div class="service-img service-show-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-25.jpg') }}">
                                </a>
                                <div class="item-info item-infos">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content service-content-three">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Femina Hairstyle</a>
                                </h3>
                                <ul>
                                    <li>Hair Cut</li>
                                    <li>Hair Styling</li>
                                    <li>Clean Shaving</li>
                                    <li>Face Cleaning</li>
                                </ul>
                                <div class="main-saloons-profile">
                                    <div class="saloon-profile-left">
                                        <div class="saloon-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-19.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="saloon-content">
                                            <div class="saloon-content-top">
                                                <i class="feather-clock"></i>
                                                <span>07:00 AM - 11:00 PM </span>
                                            </div>
                                            <div class="saloon-content-btn">
                                                <i class="feather-map-pin"></i>
                                                <span>Main Boulevard, Lahore,</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="saloon-right">
                                        <span>$70</span>
                                    </div>
                                </div>
                                <div class="saloon-bottom">
                                    <a href="{{ url('service-details') }}"><i class="feather-calendar me-2"></i>MAKE AN
                                        APPOINTMENT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service-slider aos" data-aos="fade-left">
                        <div class="service-widget">
                            <div class="service-img service-show-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-26.jpg') }}">
                                </a>
                                <div class="item-info item-infos">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content service-content-three">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">The Macho Lever</a>
                                </h3>
                                <ul>
                                    <li>Hair Cut</li>
                                    <li>Hair Styling</li>
                                    <li>Clean Shaving</li>
                                    <li>Face Cleaning</li>
                                </ul>
                                <div class="main-saloons-profile">
                                    <div class="saloon-profile-left">
                                        <div class="saloon-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-18.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="saloon-content">
                                            <div class="saloon-content-top">
                                                <i class="feather-clock"></i>
                                                <span>07:00 AM - 11:00 PM </span>
                                            </div>
                                            <div class="saloon-content-btn">
                                                <i class="feather-map-pin"></i>
                                                <span>Main Boulevard, Lahore,</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="saloon-right">
                                        <span>$70</span>
                                    </div>
                                </div>
                                <div class="saloon-bottom">
                                    <a href="{{ url('service-details') }}"><i class="feather-calendar me-2"></i>MAKE AN
                                        APPOINTMENT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service-slider  aos" data-aos="fade-right">
                        <div class="service-widget">
                            <div class="service-img service-show-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-27.jpg') }}">
                                </a>
                                <div class="item-info item-infos">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content service-content-three">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Master Barber</a>
                                </h3>
                                <ul>
                                    <li>Hair Cut</li>
                                    <li>Hair Styling</li>
                                    <li>Clean Shaving</li>
                                    <li>Face Cleaning</li>
                                </ul>
                                <div class="main-saloons-profile">
                                    <div class="saloon-profile-left">
                                        <div class="saloon-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-17.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="saloon-content">
                                            <div class="saloon-content-top">
                                                <i class="feather-clock"></i>
                                                <span>07:00 AM - 11:00 PM </span>
                                            </div>
                                            <div class="saloon-content-btn">
                                                <i class="feather-map-pin"></i>
                                                <span>Main Boulevard, Lahore,</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="saloon-right">
                                        <span>$70</span>
                                    </div>
                                </div>
                                <div class="saloon-bottom">
                                    <a href=""><i class="feather-calendar me-2"></i>MAKE AN APPOINTMENT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="service-slider  aos" data-aos="fade-up">
                        <div class="service-widget">
                            <div class="service-img service-show-img">
                                <div class="service-img-top">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-28.jpg') }}">
                                    </a>
                                </div>
                                <div class="item-info item-infos">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content service-content-three">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Rearhair Stylist</a>
                                </h3>
                                <ul>
                                    <li>Hair Cut</li>
                                    <li>Hair Styling</li>
                                    <li>Clean Shaving</li>
                                    <li>Face Cleaning</li>
                                </ul>
                                <div class="main-saloons-profile">
                                    <div class="saloon-profile-left">
                                        <div class="saloon-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-15.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="saloon-content">
                                            <div class="saloon-content-top">
                                                <i class="feather-clock"></i>
                                                <span>07:00 AM - 11:00 PM </span>
                                            </div>
                                            <div class="saloon-content-btn">
                                                <i class="feather-map-pin"></i>
                                                <span>Main Boulevard, Lahore,</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="saloon-right">
                                        <span>$70</span>
                                    </div>
                                </div>
                                <div class="saloon-bottom">
                                    <a href="{{ url('service-details') }}"><i class="feather-calendar me-2"></i>MAKE AN
                                        APPOINTMENT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 ">
                    <div class="service-slider aos" data-aos="fade-left">
                        <div class="service-widget">
                            <div class="service-img service-show-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-24.jpg') }}">
                                </a>
                                <div class="item-info item-infos">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content service-content-three">
                                <h3 class="title">
                                    <a href="javascript:;">The Rockstar Barber</a>
                                </h3>
                                <ul>
                                    <li>Hair Cut</li>
                                    <li>Hair Styling</li>
                                    <li>Clean Shaving</li>
                                    <li>Face Cleaning</li>
                                </ul>
                                <div class="main-saloons-profile">
                                    <div class="saloon-profile-left">
                                        <div class="saloon-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-20.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="saloon-content">
                                            <div class="saloon-content-top">
                                                <i class="feather-clock"></i>
                                                <span>07:00 AM - 11:00 PM </span>
                                            </div>
                                            <div class="saloon-content-btn">
                                                <i class="feather-map-pin"></i>
                                                <span>Main Boulevard, Lahore,</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="saloon-right">
                                        <span>$70</span>
                                    </div>
                                </div>
                                <div class="saloon-bottom">
                                    <a href=""><i class="feather-calendar me-2"></i>MAKE AN APPOINTMENT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-sec btn-saloons aos" data-aos="fade-up">
                    <a href="{{ url('search') }}" class="btn btn-primary btn-view">VIEW ALL SALOONS</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Section -->

    <!-- Appointment Section -->
    <section class="appointment-section aos" data-aos="fade-up">
        <div class="container">
            <div class="appointment-main">
                <h6>GET A MODERN LOOK</h6>
                <h1>Upto 25% offer on First Appointment</h1>
                <p>No one you see is smarter than he so join us here are sure to get a smile from seven stranded.</p>
                <div class="appointment-btn">
                    <a href="{{ url('free-trial') }}" class="btn btn-primary">BOOK AN APPOINTMENT NOW</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Appointment Section -->

    <!-- Services Section -->
    <section class="services-section stylists-section">
        <div class="container">
            <div class="services-header aos" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-content">
                            <h2>Featured Stylists</h2>
                            <div class="our-img-all">
                                <img src="{{ URL::asset('/assets/img/icons/scissor.svg') }}" alt="">
                            </div>
                            <p>Our Barbershop & Tattoo Salon provides classic services combined with innovative techniques.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel stylists-slider aos" data-aos="fade-up">
                        <div class="stylists-all">
                            <div class="stylists-main-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-image" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/profiles/avatar-04.jpg') }}">
                                </a>
                            </div>
                            <div class="stylists-bottom">
                                <div class="stylists-foot">
                                    <a href="{{ url('service-details') }}">
                                        <h4>Evelyn Nelson</h4>
                                    </a>
                                    <h6>300 Bookings</h6>
                                    <div class="stylists-rating">
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fa-solid fa-star-half-stroke filled"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="stylists-all">
                            <div class="stylists-main-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-image" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg') }}">
                                </a>
                            </div>
                            <div class="stylists-bottom">
                                <div class="stylists-foot">
                                    <a href="{{ url('service-details') }}">
                                        <h4>Matthew Joe</h4>
                                    </a>
                                    <h6>356 Bookings</h6>
                                    <div class="stylists-rating">
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="stylists-all">
                            <div class="stylists-main-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-image" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/profiles/avatar-06.jpg') }}">
                                </a>
                            </div>
                            <div class="stylists-bottom">
                                <div class="stylists-foot">
                                    <a href="{{ url('service-details') }}">
                                        <h4>Matthew Joe</h4>
                                    </a>
                                    <h6>145 Bookings</h6>
                                    <div class="stylists-rating">
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fa-solid fa-star-half-stroke filled"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="stylists-all">
                            <div class="stylists-main-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-image" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/profiles/avatar-07.jpg') }}">
                                </a>
                            </div>
                            <div class="stylists-bottom">
                                <div class="stylists-foot">
                                    <a href="{{ url('service-details') }}">
                                        <h4>Matthew Joe</h4>
                                    </a>
                                    <h6>256 Bookings</h6>
                                    <div class="stylists-rating">
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="stylists-all">
                            <div class="stylists-main-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-image" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/profiles/avatar-08.jpg') }}">
                                </a>
                            </div>
                            <div class="stylists-bottom">
                                <div class="stylists-foot">
                                    <a href="{{ url('service-details') }}">
                                        <h4>James George</h4>
                                    </a>
                                    <h6>300 Bookings</h6>
                                    <div class="stylists-rating">
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fa-solid fa-star-half-stroke filled"></i>
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
    <!-- /service Section -->

    <!-- Service Section -->
    <section class="service-section populars-section">
        <div class="container">
            <div class="services-header aos" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-content">
                            <h2>Popular Locations</h2>
                            <div class="our-img-all">
                                <img src="{{ URL::asset('/assets/img/icons/scissor.svg') }}" alt="">
                            </div>
                            <p>Our Barbershop & Tattoo Salon provides classic services combined with innovative techniques.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row aos" data-aos="fade-up">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="service-slider">
                        <div class="service-widget">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-30.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content popular-content">
                                <a href="{{ url('service-details') }}">
                                    <h3>USA</h3>
                                </a>
                                <h6>49 Saloons</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="service-slider">
                        <div class="service-widget">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-31.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content popular-content">
                                <a href="{{ url('service-details') }}">
                                    <h3>UK</h3>
                                </a>
                                <h6>49 Saloons</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="service-slider">
                        <div class="service-widget">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-32.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content popular-content">
                                <a href="{{ url('service-details') }}">
                                    <h3>Mexico</h3>
                                </a>
                                <h6>49 Saloons</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="service-slider">
                        <div class="service-widget">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-33.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content popular-content">
                                <a href="{{ url('service-details') }}">
                                    <h3>UAE</h3>
                                </a>
                                <h6>49 Saloons</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="service-slider">
                        <div class="service-widget">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-34.png') }}">
                                </a>
                            </div>
                            <div class="service-content popular-content">
                                <a href="{{ url('service-details') }}">
                                    <h3>France</h3>
                                </a>
                                <h6>49 Saloons</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="service-slider">
                        <div class="service-widget">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-35.png') }}">
                                </a>
                            </div>
                            <div class="service-content popular-content">
                                <a href="{{ url('service-details') }}">
                                    <h3>Germany</h3>
                                </a>
                                <h6>49 Saloons</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="service-slider">
                        <div class="service-widget">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-36.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content popular-content">
                                <a href="{{ url('service-details') }}">
                                    <h3>Italy</h3>
                                </a>
                                <h6>49 Saloons</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="service-slider">
                        <div class="service-widget">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-37.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content popular-content">
                                <a href="{{ url('service-details') }}">
                                    <h3>Argentina</h3>
                                </a>
                                <h6>49 Saloons</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-sec btn-saloons aos" data-aos="fade-up">
                    <a href="{{ url('search') }}" class="btn btn-primary btn-view">VIEW ALL LOCATION</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Section -->

    <!-- Works Section -->
    <section class="works-section">
        <div class="container">
            <div class="services-header aos" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-content">
                            <h2>How It Works</h2>
                            <div class="our-img-all">
                                <img src="{{ URL::asset('/assets/img/icons/scissor.svg') }}" alt="">
                            </div>
                            <p>Our Barbershop & Tattoo Salon provides classic services combined with innovative techniques.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="works-main aos" data-aos="fade-right">
                        <div class="works-tops">
                            <div class="works-top-img">
                                <img src="{{ URL::asset('/assets/img/services/service-30.jpg') }}" alt="">
                                <span>1</span>
                            </div>
                        </div>
                        <div class="works-bottom">
                            <a href="javascript:void(0);">
                                <h2>Discover</h2>
                            </a>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="works-main aos" data-aos="fade-up">
                        <div class="works-tops">
                            <div class="works-top-img works-load-profile">
                                <img src="{{ URL::asset('/assets/img/services/service-25.jpg') }}" alt="">
                                <span>2</span>
                            </div>
                        </div>
                        <div class="works-bottom">
                            <a href="javascript:void(0);">
                                <h2>Basics</h2>
                            </a>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="works-main aos" data-aos="fade-left">
                        <div class="works-tops">
                            <div class="works-top-img">
                                <img src="{{ URL::asset('/assets/img/services/service-30.jpg') }}" alt="">
                                <span>3</span>
                            </div>
                        </div>
                        <div class="works-bottom">
                            <a href="javascript:void(0);">
                                <h2>Enjoy</h2>
                            </a>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Works Section -->

    <!-- client section -->
    <section class="client-sections review-four">
        <div class="container">
            <div class="services-header aos" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-content section-client">
                            <h2>What Our Client Says</h2>
                            <div class="our-img-all">
                                <img src="{{ URL::asset('/assets/img/icons/scissor-white.svg') }}" alt="">
                            </div>
                            <p>Our Barbershop & Tattoo Salon provides classic services combined with innovative techniques.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" slider say-about slider-for aos" data-aos="fade-up">
                <div>
                    <div class="review-love-group">
                        <div class="quote-love-img">
                            <img class="img-fluid" src="{{ URL::asset('/assets/img/icons/quote.svg') }}" alt="">
                        </div>
                        <p class="review-passage">“ Vitae amet cras nulla mi laoreet quis amet phasellus. Enim orci lacus
                            quam mauris nunc ultrices duis. Ornare leo mi aenean egestas montes cras.Vitae amet cras nulla
                            mi laoreet quis amet phasellus. Enim orci lacus quam mauris nunc ultrices duis. Ornare leo mi
                            aenean egestas montes cras. Egestas erat viverra scelerisque bibendum. “</p>
                        <div class="say-name-blk text-center">
                            <h5>Paul Walker</h5>
                            <p>Newyork, USA</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="review-love-group">
                        <div class="quote-love-img">
                            <img class="img-fluid" src="{{ URL::asset('/assets/img/icons/quote.svg') }}" alt="">
                        </div>
                        <p class="review-passage">“ Vitae amet cras nulla mi laoreet quis amet phasellus. Enim orci lacus
                            quam mauris nunc ultrices duis. Ornare leo mi aenean egestas montes cras.Vitae amet cras nulla
                            mi laoreet quis amet phasellus. Enim orci lacus quam mauris nunc ultrices duis. Ornare leo mi
                            aenean egestas montes cras. Egestas erat viverra scelerisque bibendum. “</p>
                        <div class="say-name-blk text-center">
                            <h5>Anthony Walker</h5>
                            <p>Newyork, USA</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="review-love-group">
                        <div class="quote-love-img">
                            <img class="img-fluid" src="{{ URL::asset('/assets/img/icons/quote.svg') }}" alt="">
                        </div>
                        <p class="review-passage">“ Vitae amet cras nulla mi laoreet quis amet phasellus. Enim orci lacus
                            quam mauris nunc ultrices duis. Ornare leo mi aenean egestas montes cras.Vitae amet cras nulla
                            mi laoreet quis amet phasellus. Enim orci lacus quam mauris nunc ultrices duis. Ornare leo mi
                            aenean egestas montes cras. Egestas erat viverra scelerisque bibendum. “</p>
                        <div class="say-name-blk text-center">
                            <h5>Van Diesel</h5>
                            <p>Newyork, USA</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="review-love-group">
                        <div class="quote-love-img">
                            <img class="img-fluid" src="{{ URL::asset('/assets/img/icons/quote.svg') }}" alt="">
                        </div>
                        <p class="review-passage">“ Vitae amet cras nulla mi laoreet quis amet phasellus. Enim orci lacus
                            quam mauris nunc ultrices duis. Ornare leo mi aenean egestas montes cras.Vitae amet cras nulla
                            mi laoreet quis amet phasellus. Enim orci lacus quam mauris nunc ultrices duis. Ornare leo mi
                            aenean egestas montes cras. Egestas erat viverra scelerisque bibendum. “</p>
                        <div class="say-name-blk text-center">
                            <h5>James Matthew</h5>
                            <p>Los Vegas, USA</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="review-love-group">
                        <div class="quote-love-img">
                            <img class="img-fluid" src="{{ URL::asset('/assets/img/icons/quote.svg') }}" alt="">
                        </div>
                        <p class="review-passage">“ Vitae amet cras nulla mi laoreet quis amet phasellus. Enim orci lacus
                            quam mauris nunc ultrices duis. Ornare leo mi aenean egestas montes cras.Vitae amet cras nulla
                            mi laoreet quis amet phasellus. Enim orci lacus quam mauris nunc ultrices duis. Ornare leo mi
                            aenean egestas montes cras. Egestas erat viverra scelerisque bibendum. “</p>
                        <div class="say-name-blk text-center">
                            <h5>George Daren</h5>
                            <p>Mexico, USA</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider client-img client-images slider-nav client-pro aos" data-aos="fade-up">
                <div class="testimonial-thumb">
                    <img src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}" alt="">
                </div>
                <div class="testimonial-thumb">
                    <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}" alt="">
                </div>
                <div class="testimonial-thumb">
                    <img src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg') }}" alt="">
                </div>
                <div class="testimonial-thumb">
                    <img src="{{ URL::asset('/assets/img/profiles/avatar-04.jpg') }}" alt="">
                </div>
                <div class="testimonial-thumb">
                    <img src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- /client section -->

    <!-- latest section -->
    <section class="services-section latest-section">
        <div class="container">
            <div class="services-header aos" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-content">
                            <h2>Our Latest News</h2>
                            <div class="our-img-all">
                                <img src="{{ URL::asset('/assets/img/icons/scissor.svg') }}" alt="">
                            </div>
                            <p>Our Barbershop & Tattoo Salon provides classic services combined with innovative techniques.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel latest-slider aos" data-aos="fade-up">
                        <div class="service-widget">
                            <div class="service-img service-latest-img">
                                <a href="{{ url('blog-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-20.png') }}">
                                </a>
                                <div class="latest-date">
                                    <span>13</span>
                                    Jan 2023
                                </div>
                            </div>
                            <div class="service-content latest-content">
                                <span>Hair Style</span>
                                <a href="{{ url('blog-details') }}" class="latest-news-content">Consectetur adipisicing
                                    elit, sed do eiusmod</a>
                                <a href="javascript:;" class="latest-news">Read More</a>
                            </div>
                        </div>
                        <div class="service-widget">
                            <div class="service-img service-latest-img">
                                <a href="{{ url('blog-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-21.png') }}">
                                </a>
                                <div class="latest-date">
                                    <span>15</span>
                                    Jan 2023
                                </div>
                            </div>
                            <div class="service-content latest-content">
                                <span>Hair Style</span>
                                <a href="{{ url('blog-details') }}" class="latest-news-content">Consectetur adipisicing
                                    elit, sed do eiusmod</a>
                                <a href="javascript:;" class="latest-news">Read More</a>
                            </div>
                        </div>
                        <div class="service-widget">
                            <div class="service-img service-latest-img">
                                <a href="{{ url('blog-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-22.png') }}">
                                </a>
                                <div class="latest-date">
                                    <span>20</span>
                                    Jan 2023
                                </div>
                            </div>
                            <div class="service-content latest-content">
                                <span>Hair Style</span>
                                <a href="{{ url('blog-details') }}" class="latest-news-content">Consectetur adipisicing
                                    elit, sed do eiusmod</a>
                                <a href="javascript:;" class="latest-news">Read More</a>
                            </div>
                        </div>
                        <div class="service-widget">
                            <div class="service-img service-latest-img">
                                <a href="{{ url('blog-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-23.png') }}">
                                </a>
                                <div class="latest-date">
                                    <span>25</span>
                                    Jan 2023
                                </div>
                            </div>
                            <div class="service-content latest-content">
                                <span>Hair Style</span>
                                <a href="{{ url('blog-details') }}" class="latest-news-content">Consectetur adipisicing
                                    elit, sed do eiusmod</a>
                                <a href="javascript:;" class="latest-news">Read More</a>
                            </div>
                        </div>
                        <div class="service-widget">
                            <div class="service-img service-latest-img">
                                <a href="{{ url('blog-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-22.png') }}">
                                </a>
                                <div class="latest-date">
                                    <span>28</span>
                                    Jan 2023
                                </div>
                            </div>
                            <div class="service-content latest-content">
                                <span>Hair Style</span>
                                <a href="{{ url('blog-details') }}" class="latest-news-content">Consectetur adipisicing
                                    elit, sed do eiusmod</a>
                                <a href="javascript:;" class="latest-news">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /latest section -->

    <!-- register section -->
    <section class="register-section aos" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="register-content">
                        <p>Get Registered and List your Saloon for free!!!</p>
                        <div class="register-btn">
                            <a href="register"><i class="feather-users me-2"></i>Register /</a>
                            <a href="{{ url('login') }}">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/register section  -->
    @component('components.model-popup')
    @endcomponent
    @component('components.scrollToTop')
    @endcomponent
@endsection
