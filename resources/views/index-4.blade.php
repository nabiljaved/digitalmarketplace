<?php $page = 'index-4'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Hero Section -->
    <section class="catering-banner-section">
        <div class="container-fluid">
            <div class="home-banner slider-service">
                <div class="row align-items-center w-100">
                    <div class="col-lg-7 col-md-10 mx-auto">
                        <div class="section-search section-search-four">
                            <h1>Reviews & Ratings of Best <span>Catering Service</span> Providers Near You</h1>
                            <p>Helped 10,000+ Customers to find the right caterers for their functions and events
                                around the world.</p>
                            <div class="search-box search-box-four">
                                <form action="search" class="search-three-form">
                                    <div class="search-input search-input-three search-input-four">
                                        <i class="feather-check-square"></i>
                                        <div class="form-group m-0">
                                            <select class="select">
                                                <option>Select Category</option>
                                                <option>Tornoto</option>
                                                <option>Texas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="search-input search-input-three search-input-four">
                                        <i class="feather-map-pin me-2"></i>
                                        <div class="form-group mb-0">
                                            <input class="form-control" type="text" placeholder="Location">
                                        </div>
                                    </div>
                                    <div class="search-btn">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="feather-search me-2"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="catering-banner-botton">
                                <div class="catering-btn-services">
                                    <div class="catering-btn-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/server.svg') }}" alt="">
                                    </div>
                                    <h5>3000+</h5>
                                    <h6>Services</h6>
                                </div>
                                <div class="catering-btn-services">
                                    <div class="catering-btn-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/Fries.svg') }}" alt="">
                                    </div>
                                    <h5>900+</h5>
                                    <h6>Food Items</h6>
                                </div>
                                <div class="catering-btn-services">
                                    <div class="catering-btn-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/Vector-1.svg') }}" alt="">
                                    </div>
                                    <h5>15k Review</h5>
                                    <h6>(4.8)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="catering-banner-img">
                            <img src="{{ URL::asset('/assets/img/catering-banner.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->
    <!-- Feature Section -->
    <section class="nearby-section">
        <div class="container">
            <div class="section-heading section-heading-four">
                <div class="row align-items-center">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2>Nearby Cateres For You</h2>
                        <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
                    </div>
                    <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                        <a href="{{ url('service-details') }}" class="btn btn-primary btn-view">VIEW ALL CATERERS<i
                                class="feather-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel catering-slider common-four-slider">
                        <div class="service-widget service-two service-four aos" data-aos="fade-up">
                            <div class="service-common-four">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-38.jpg') }}">
                                    </a>
                                </div>
                                <div class="service-content">
                                    <div class="catering-main-bottom">
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fa-solid fa-star-half-stroke filled"></i>
                                            <span>(3800 Reviews)</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">Food Chef Caterings</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content-bottom">
                                <div class="service-cater-img">
                                    <img src="{{ URL::asset('/assets/img/profiles//avatar-03.jpg') }}" alt="">
                                    <p>Harling Shaw</p>
                                </div>
                                <h6>4.5 KM</h6>
                            </div>
                        </div>
                        <div class="service-widget service-two service-four aos" data-aos="fade-up">
                            <div class="service-common-four">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-39.jpg') }}">
                                    </a>
                                </div>
                                <div class="service-content">
                                    <div class="catering-main-bottom">
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span>(1654 Reviews)</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">Magnificent Caterers</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content-bottom">
                                <div class="service-cater-img">
                                    <img src="{{ URL::asset('/assets/img/profiles//avatar-04.jpg') }}" alt="">
                                    <p>Daniel Mathew</p>
                                </div>
                                <h6>6.5 KM</h6>
                            </div>
                        </div>
                        <div class="service-widget service-two service-four aos" data-aos="fade-up">
                            <div class="service-common-four">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-40.jpg') }}">
                                    </a>
                                </div>
                                <div class="service-content">
                                    <div class="catering-main-bottom">
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fa-solid fa-star-half-stroke filled"></i>
                                            <span>(4577 Reviews)</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">Food Chef Caterings</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content-bottom">
                                <div class="service-cater-img">
                                    <img src="{{ URL::asset('/assets/img/profiles//avatar-05.jpg') }}" alt="">
                                    <p>Karen Risb</p>
                                </div>
                                <h6>2.5 KM</h6>
                            </div>
                        </div>
                        <div class="service-widget service-two service-four aos" data-aos="fade-up">
                            <div class="service-common-four">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-41.jpg') }}">
                                    </a>
                                </div>
                                <div class="service-content">
                                    <div class="catering-main-bottom">
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span>(1571 Reviews)</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">Posh Caterers</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content-bottom">
                                <div class="service-cater-img">
                                    <img src="{{ URL::asset('/assets/img/profiles//avatar-06.jpg') }}" alt="">
                                    <p>Habibul Akbar</p>
                                </div>
                                <h6>6.5 KM</h6>
                            </div>
                        </div>
                        <div class="service-widget service-two service-four aos" data-aos="fade-up">
                            <div class="service-common-four">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-38.jpg') }}">
                                    </a>
                                </div>
                                <div class="service-content">
                                    <div class="catering-main-bottom">
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span>(3800 Reviews)</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">Food Chef Caterings</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content-bottom">
                                <div class="service-cater-img">
                                    <img src="{{ URL::asset('/assets/img/profiles//avatar-03.jpg') }}" alt="">
                                    <p>Harling Shaw</p>
                                </div>
                                <h6>4.5 KM</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Feature Section -->
    <!-- Categories Section -->
    <section class="categories-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading category-heading aos" data-aos="fade-up">
                        <h2>Catering Service Categories</h2>
                        <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                    <a href="{{ url('service-details') }}">
                        <div class="categories-main-all">
                            <div class="categories-img">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/categories-1.svg') }}" alt="">
                                </span>
                            </div>
                            <h6>Event Party
                                Caterings</h6>
                            <span class="category-bottom">
                                <i class="feather-chevron-right "></i>
                            </span>
                        </div>
                    </a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                    <a href="{{ url('service-details') }}">
                        <div class="categories-main-all">
                            <div class="categories-img">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/categories-2.svg') }}" alt="">
                                </span>
                            </div>
                            <h6>Social Function
                                Catering</h6>
                            <span class="category-bottom">
                                <i class="feather-chevron-right "></i>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                    <a href="{{ url('service-details') }}">
                        <div class="categories-main-all">
                            <div class="categories-img">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/categories-3.svg') }}" alt="">
                                </span>
                            </div>
                            <h6>Event Party Caterings </h6>
                            <span class="category-bottom">
                                <i class="feather-chevron-right "></i>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                    <a href="{{ url('service-details') }}">
                        <div class="categories-main-all">
                            <div class="categories-img">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/categories-4.svg') }}" alt="">
                                </span>
                            </div>
                            <h6>Kitty Party Caterings</h6>
                            <span class="category-bottom">
                                <i class="feather-chevron-right "></i>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                    <a href="{{ url('service-details') }}">
                        <div class="categories-main-all">
                            <div class="categories-img">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/categories-5.svg') }}" alt="">
                                </span>
                            </div>
                            <h6>Buffet Event Caterings</h6>
                            <span class="category-bottom">
                                <i class="feather-chevron-right "></i>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                    <a href="{{ url('service-details') }}">
                        <div class="categories-main-all">
                            <div class="categories-img">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/categories-6.svg') }}" alt="">
                                </span>
                            </div>
                            <h6>International Caterings</h6>
                            <span class="category-bottom">
                                <i class="feather-chevron-right "></i>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                    <a href="{{ url('service-details') }}">
                        <div class="categories-main-all">
                            <div class="categories-img">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/categories-7.svg') }}" alt="">
                                </span>
                            </div>
                            <h6>Outdoor Event Catering</h6>
                            <span class="category-bottom">
                                <i class="feather-chevron-right "></i>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                    <a href="{{ url('service-details') }}">
                        <div class="categories-main-all">
                            <div class="categories-img">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/categories-8.svg') }}" alt="">
                                </span>
                            </div>
                            <h6>Birthday Party Catering</h6>
                            <span class="category-bottom">
                                <i class="feather-chevron-right "></i>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                    <a href="{{ url('service-details') }}">
                        <div class="categories-main-all">
                            <div class="categories-img">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/categories-9.svg') }}" alt="">
                                </span>
                            </div>
                            <h6>Home Event Catering</h6>
                            <span class="category-bottom">
                                <i class="feather-chevron-right "></i>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                    <a href="{{ url('service-details') }}">
                        <div class="categories-main-all">
                            <div class="categories-img">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/categories-10.svg') }}" alt="">
                                </span>
                            </div>
                            <h6>Engagement Event Catering</h6>
                            <span class="category-bottom">
                                <i class="feather-chevron-right "></i>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                    <a href="{{ url('service-details') }}">
                        <div class="categories-main-all">
                            <div class="categories-img">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/categories-11.svg') }}" alt="">
                                </span>
                            </div>
                            <h6>Home Event Catering</h6>
                            <span class="category-bottom">
                                <i class="feather-chevron-right "></i>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                    <a href="{{ url('service-details') }}">
                        <div class="categories-main-all">
                            <div class="categories-img">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/categories-12.svg') }}" alt="">
                                </span>
                            </div>
                            <h6>Indoor Event Catering</h6>
                            <span class="category-bottom">
                                <i class="feather-chevron-right "></i>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="btn-sec btn-catering aos" data-aos="fade-up">
                    <a href="{{ url('search') }}" class="btn btn-primary btn-view">VIEW ALL CATEGORIES<i
                            class="feather-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Categories Section -->

    <!-- Features Services -->
    <section class="features-four-section">
        <div class="container">
            <div class="section-heading section-heading-four">
                <div class="row align-items-center">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2>Featured Cateres</h2>
                        <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
                    </div>
                    <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                        <a href="{{ url('service-details') }}" class="btn btn-primary btn-view">VIEW ALL CATERERS<i
                                class="feather-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel features-four-slider common-four-slider">
                        <div class="service-widget service-two aos" data-aos="fade-up">
                            <div class="service-img service-four-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-44.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <div class="rate-four">
                                        <i class="fas fa-star filled"></i><span>4.8</span>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content service-four-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Swagatham Caters</a>
                                </h3>
                                <p class="service-cater-bottom"><i class="feather-map-pin"></i>New Jersey, USA</p>
                                <p>we are also engage in offering catering services and decoration services where
                                    vision...</p>
                                <ul>
                                    <li>Buffet Caterings</li>
                                    <li>Engagement</li>
                                </ul>
                                <div class="category-feature-bottom">
                                    <p>Starting from $500</p>
                                    <a href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget service-two aos" data-aos="fade-up">
                            <div class="service-img service-four-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-42.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <div class="rate-four">
                                        <i class="fas fa-star filled"></i><span>4.9</span>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content service-four-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Delight Catering</a>
                                </h3>
                                <p class="service-cater-bottom"><i class="feather-map-pin"></i>Nevada, USA</p>
                                <p>we are also engage in offering catering services and decoration services where
                                    vision...</p>
                                <ul>
                                    <li>Indoor</li>
                                    <li>Engagement</li>
                                    <li>Kitty Partying</li>
                                </ul>
                                <div class="category-feature-bottom">
                                    <p>Starting from $255</p>
                                    <a href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget service-two aos" data-aos="fade-up">
                            <div class="service-img service-four-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-43.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <div class="rate-four">
                                        <i class="fas fa-star filled"></i><span>3.8</span>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content service-four-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Homemade Foods Caters</a>
                                </h3>
                                <p class="service-cater-bottom"><i class="feather-map-pin"></i>Chicago, USA</p>
                                <p>we are also engage in offering catering services and decoration services where
                                    vision...</p>
                                <ul>
                                    <li>Buffet Caterings</li>
                                    <li>Engagement</li>
                                </ul>
                                <div class="category-feature-bottom">
                                    <p>Starting from $500</p>
                                    <a href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget service-two aos" data-aos="fade-up">
                            <div class="service-img service-four-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-41.jpg') }}">
                                </a>
                                <div class="fav-item">
                                    <div class="rate-four">
                                        <i class="fas fa-star filled"></i><span>4.8</span>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content service-four-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Swagatham Caters</a>
                                </h3>
                                <p class="service-cater-bottom"><i class="feather-map-pin"></i>New Jersey, USA</p>
                                <p>we are also engage in offering catering services and decoration services where
                                    vision...</p>
                                <ul>
                                    <li>Indoor</li>
                                    <li>Engagement</li>
                                    <li>Kitty Partying</li>
                                    <li>international</li>
                                </ul>
                                <div class="category-feature-bottom">
                                    <p>Starting from $500</p>
                                    <a href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Features Services -->

    <!-- Categories Section -->
    <section class="trust-us-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading category-heading aos" data-aos="fade-up">
                        <h2>Why Trust us</h2>
                        <p>We are growing day by day in terms of catering service providers listing,</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="trust-us-main">
                        <div class="trust-us-img">
                            <i class="feather-star"></i>
                        </div>
                        <h6>Verified Reviews</h6>
                        <p>We has more than 4000 Caterers & catering service companies (and counting) listed with
                            detailed information</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="trust-us-main">
                        <div class="trust-us-img">
                            <i class="feather-eye"></i>
                        </div>
                        <h6>Catering Services</h6>
                        <p>We has more than 4000 Caterers & catering service companies (and counting) listed with
                            detailed information</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="trust-us-main">
                        <div class="trust-us-img">
                            <i class="feather-file-text"></i>
                        </div>
                        <h6>Research & Surveys</h6>
                        <p>We has more than 4000 Caterers & catering service companies (and counting) listed with
                            detailed information</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="trust-us-main">
                        <div class="trust-us-img">
                            <i class="feather-briefcase"></i>
                        </div>
                        <h6>Experience In Business</h6>
                        <p>We has more than 4000 Caterers & catering service companies (and counting) listed with
                            detailed information</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Categories Section -->
    <!-- Popular Services -->
    <section class="popular-four-section">
        <div class="container">
            <div class="section-heading section-heading-four">
                <div class="row align-items-center">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2>Popular Locations</h2>
                        <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
                    </div>
                    <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                        <a href="{{ url('categories') }}" class="btn btn-primary btn-view">VIEW ALL LOCATIONS<i
                                class="feather-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="popular-four-main">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">

                        <div class="popular-portfolio">
                            <a href="javascript:void(0);">
                                <div class="popular-portfolio-img">
                                    <img src="{{ URL::asset('/assets/img/gallery/gallery-img-5.jpg') }}" alt="image">
                                    <div class="popular-portfolio-overlay">
                                        <h6>NewYork</h6>
                                        <p>165 Caterings</p>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);">
                                <div class="popular-portfolio-img">
                                    <img src="{{ URL::asset('/assets/img/gallery/gallery-img-6.jpg') }}" alt="image">
                                    <div class="popular-portfolio-overlay">
                                        <h6>Los Angels</h6>
                                        <p>45 Caterings</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="popular-portfolio">
                            <a href="javascript:void(0);">
                                <div class="popular-portfolio-img">
                                    <img src="{{ URL::asset('/assets/img/gallery/gallery-img-4.jpg') }}" alt="image">
                                    <div class="popular-portfolio-overlay">
                                        <h6>Istanbul</h6>
                                        <p>30 Caterings</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="popular-portfolio">
                            <a href="javascript:void(0);">
                                <div class="popular-portfolio-img">
                                    <img src="{{ URL::asset('/assets/img/gallery/gallery-img-7.jpg') }}" alt="image">
                                    <div class="popular-portfolio-overlay">
                                        <h6>Paris</h6>
                                        <p>47 Caterings</p>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);">
                                <div class="popular-portfolio-img">
                                    <img src="{{ URL::asset('/assets/img/gallery/gallery-img-8.jpg') }}" alt="image">
                                    <div class="popular-portfolio-overlay">
                                        <h6>London</h6>
                                        <p>78 Caterings</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="popular-portfolio">
                            <a href="javascript:void(0);">
                                <div class="popular-portfolio-img">
                                    <img src="{{ URL::asset('/assets/img/gallery/gallery-img-9.jpg') }}" alt="image">
                                    <div class="popular-portfolio-overlay">
                                        <h6>Florida</h6>
                                        <p>14 Caterings</p>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);">
                                <div class="popular-portfolio-img">
                                    <img src="{{ URL::asset('/assets/img/gallery/gallery-img-10.jpg') }}" alt="image">
                                    <div class="popular-portfolio-overlay">
                                        <h6>Miami</h6>
                                        <p>54 Caterings</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Popular Services -->
    <!-- Working Section -->
    <section class="Working-four-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading working-four-heading aos" data-aos="fade-up">
                        <p>Working Steps</p>
                        <h2>How we are working</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="working-four-main">
                        <h6>Step 1</h6>
                        <div class="working-four-img">
                            <img src="{{ URL::asset('/assets/img/icons/working-1.svg') }}" alt="">
                        </div>
                        <h4>Choose a Service Category</h4>
                        <p>Select the type of catering service you are looking for </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="working-four-main">
                        <h6>Step 2</h6>
                        <div class="working-four-img">
                            <img src="{{ URL::asset('/assets/img/icons/working-2.svg') }}" alt="">
                        </div>
                        <h4>Choose a Service Category</h4>
                        <p>Select the type of catering service you are looking for </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="working-four-main">
                        <h6>Step 3</h6>
                        <div class="working-four-img">
                            <img src="{{ URL::asset('/assets/img/icons/working-3.svg') }}" alt="">
                        </div>
                        <h4>Check Catererings Details</h4>
                        <p>Select the type of catering service you are looking for </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="working-four-main">
                        <h6>Step 4</h6>
                        <div class="working-four-img">
                            <img src="{{ URL::asset('/assets/img/icons/working-4.svg') }}" alt="">
                        </div>
                        <h4>Book the best catererings</h4>
                        <p>Select the type of catering service you are looking for </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Working Section -->
    <!-- Around the world  Services -->
    <section class="around-world-section">
        <div class="container">
            <div class="section-heading section-heading-four">
                <div class="row align-items-center">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2>Top Caterers Around the World</h2>
                        <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
                    </div>
                    <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                        <a href="{{ url('categories') }}" class="btn btn-primary btn-view">VIEW ALL CATERERS<i
                                class="feather-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel world-four-slider common-four-slider">
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-45.jpg') }}">
                                </a>
                                <div class="fav-item fav-item-four">
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info item-info-four">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content service-four-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">MealMenu Caterings</a>
                                </h3>
                                <p>we are also engage in offering catering services and decoration services where vision...
                                </p>
                                <ul>
                                    <li>Buffet Caterings</li>
                                    <li>Engagement</li>
                                </ul>
                                <p><span class="mini-mealmenu">$900</span><span class="mealmenu">$200</span></p>
                            </div>
                            <div class="service-content-bottom">
                                <div class="service-cater-img service-world-img">
                                    <a href=""><img src="{{ URL::asset('/assets/img/profiles//avatar-03.jpg') }}"
                                            alt=""></a>
                                    <p class="service-cater-bottom"><i class="feather-map-pin"></i>New Jersey, USA</p>
                                </div>
                                <span><i class="feather-calendar"></i></span>
                            </div>
                        </div>
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-46.jpg') }}">
                                </a>
                                <div class="fav-item fav-item-four">
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info item-info-four">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content service-four-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Blue Sea Catering & Banquets</a>
                                </h3>
                                <p>we are also engage in offering catering services and decoration services where vision...
                                </p>
                                <ul>
                                    <li>Buffet Caterings</li>
                                    <li>Engagement</li>
                                </ul>
                                <p><span class="mini-mealmenu">$600</span><span class="mealmenu">$450</span></p>
                            </div>
                            <div class="service-content-bottom">
                                <div class="service-cater-img service-world-img">
                                    <a href=""><img src="{{ URL::asset('/assets/img/profiles//avatar-06.jpg') }}"
                                            alt=""></a>
                                    <p class="service-cater-bottom"><i class="feather-map-pin"></i>Main Boulevard, Lahore,
                                    </p>
                                </div>
                                <span><i class="feather-calendar"></i></span>
                            </div>
                        </div>
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-47.jpg') }}">
                                </a>
                                <div class="fav-item fav-item-four">
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info item-info-four">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content service-four-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Popular Hospitality</a>
                                </h3>
                                <p>we are also engage in offering catering services and decoration services where vision...
                                </p>
                                <ul>
                                    <li>Buffet Caterings</li>
                                    <li>Engagement</li>
                                </ul>
                                <p><span class="mini-mealmenu">$700</span><span class="mealmenu">$100</span></p>
                            </div>
                            <div class="service-content-bottom">
                                <div class="service-cater-img service-world-img">
                                    <a href=""><img src="{{ URL::asset('/assets/img/profiles//avatar-08.jpg') }}"
                                            alt=""></a>
                                    <p class="service-cater-bottom"><i class="feather-map-pin"></i>USA Peachfield Road, Uk
                                    </p>
                                </div>
                                <span><i class="feather-calendar"></i></span>
                            </div>
                        </div>
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('service-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-46.jpg') }}">
                                </a>
                                <div class="fav-item fav-item-four">
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                                <div class="item-info item-info-four">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content service-four-content">
                                <h3 class="title">
                                    <a href="{{ url('service-details') }}">Blue Sea Catering & Banquets</a>
                                </h3>
                                <p>we are also engage in offering catering services and decoration services where vision...
                                </p>
                                <ul>
                                    <li>Buffet Caterings</li>
                                    <li>Engagement</li>
                                </ul>
                                <p><span class="mini-mealmenu">$600</span><span class="mealmenu">$450</span></p>
                            </div>
                            <div class="service-content-bottom">
                                <div class="service-cater-img service-world-img">
                                    <a href=""><img src="{{ URL::asset('/assets/img/profiles//avatar-09.jpg') }}"
                                            alt=""></a>
                                    <p class="service-cater-bottom"><i class="feather-map-pin"></i>Main Boulevard, Lahore,
                                    </p>
                                </div>
                                <span><i class="feather-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Around the world  Services -->
    <section class="review-client-section">
        <div class="container">
            <div class="section-heading section-heading-four">
                <div class="row align-items-center">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2>Reviews from our Clients</h2>
                        <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
                    </div>
                    <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                        <a href="javascript:void(0)" class="btn btn-primary btn-view">VIEW ALL REVIEWS<i
                                class="feather-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel client-four-slider common-four-slider">
                        <div class="client-review-main">
                            <div class="client-review-top">
                                <div class="client-review-name">
                                    <h6>Daniela Fransis</h6>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua reader will be distracted
                                    Loremut labore et dolore magna aliqua reader will be distracted Lorem
                                </p>
                            </div>
                            <div class="client-review-img">
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-15.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="client-review-main">
                            <div class="client-review-top">
                                <div class="client-review-name">
                                    <h6>Hashimoda Reena</h6>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fa-solid fa-star-half-stroke filled"></i>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua reader will be distracted
                                    Loremut labore et dolore magna aliqua reader will be distracted Lorem
                                </p>
                            </div>
                            <div class="client-review-img">
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-19.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="client-review-main">
                            <div class="client-review-top">
                                <div class="client-review-name">
                                    <h6>Jake Sulaine</h6>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua reader will be distracted
                                    Loremut labore et dolore magna aliqua reader will be distracted Lorem
                                </p>
                            </div>
                            <div class="client-review-img">
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-18.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="client-review-main">
                            <div class="client-review-top">
                                <div class="client-review-name">
                                    <h6>Daniela Fransis</h6>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua reader will be distracted
                                    Loremut labore et dolore magna aliqua reader will be distracted Lorem
                                </p>
                            </div>
                            <div class="client-review-img">
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-15.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="company-slider" class="owl-carousel owl-theme testimonial-slider aos" data-aos="fade-up">
                <div class="company-logos">
                    <img src="{{ URL::asset('/assets/img/icons/logo-01.svg') }}" alt="">
                </div>
                <div class="company-logos">
                    <img src="{{ URL::asset('/assets/img/icons/logo-02.svg') }}" alt="">
                </div>
                <div class="company-logos">
                    <img src="{{ URL::asset('/assets/img/icons/logo-03.svg') }}" alt="">
                </div>
                <div class="company-logos">
                    <img src="{{ URL::asset('/assets/img/icons/logo-06.svg') }}" alt="">
                </div>
                <div class="company-logos">
                    <img src="{{ URL::asset('/assets/img/icons/logo-04.svg') }}" alt="">
                </div>
                <div class="company-logos">
                    <img src="{{ URL::asset('/assets/img/icons/logo-05.svg') }}" alt="">
                </div>
                <div class="company-logos">
                    <img src="{{ URL::asset('/assets/img/icons/logo-03.svg') }}" alt="">
                </div>
                <div class="company-logos">
                    <img src="{{ URL::asset('/assets/img/icons/logo-06.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- /Reviews from our Clients -->
    <!-- Interesting & Useful Blogs section -->
    <section class="useful-blog-section">
        <div class="container">
            <div class="section-heading section-heading-four">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2>Interesting & Useful Blogs</h2>
                        <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
                    </div>
                    <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                        <a href="{{ url('blog-details') }}" class="btn btn-primary btn-view">VIEW ALL BLOGS<i
                                class="feather-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel useful-four-slider common-four-slider">
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('blog-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-48.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content service-four-blogs">
                                <h3 class="title">
                                    <a href="{{ url('blog-details') }}">Lorem Ipsum is simply dummy text of the </a>
                                </h3>
                                <p>we are also engage in offering catering services and decoration services where vision...
                                </p>
                                <div class="usefull-bottom">
                                    <h6>by Christopher</h6>
                                    <div class="useful-img">
                                        <a href="{{ url('customer-profile') }}"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg') }}"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('blog-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-49.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content service-four-blogs">
                                <h3 class="title">
                                    <a href="{{ url('blog-details') }}">Lorem Ipsum is simply dummy text of the </a>
                                </h3>
                                <p>we are also engage in offering catering services and decoration services where vision...
                                </p>
                                <div class="usefull-bottom">
                                    <h6>by James</h6>
                                    <div class="useful-img">
                                        <a href="{{ url('customer-profile') }}"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg') }}"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('blog-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-50.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content service-four-blogs">
                                <h3 class="title">
                                    <a href="{{ url('blog-details') }}">Lorem Ipsum is simply dummy text of the </a>
                                </h3>
                                <p>we are also engage in offering catering services and decoration services where vision...
                                </p>
                                <div class="usefull-bottom">
                                    <h6>by Matthew</h6>
                                    <div class="useful-img">
                                        <a href="{{ url('customer-profile') }}"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-12.jpg') }}"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('blog-details') }}">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/services/service-49.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content service-four-blogs">
                                <h3 class="title">
                                    <a href="{{ url('blog-details') }}">Lorem Ipsum is simply dummy text of the </a>
                                </h3>
                                <p>we are also engage in offering catering services and decoration services where vision...
                                </p>
                                <div class="usefull-bottom">
                                    <h6>by George paul</h6>
                                    <div class="useful-img">
                                        <a href="{{ url('customer-profile') }}"><img
                                                src="{{ URL::asset('/assets/img/profiles/avatar-15.jpg') }}"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Interesting & Useful Blogs section -->
    @component('components.model-popup')
    @endcomponent
    @component('components.scrollToTop')
    @endcomponent
@endsection
