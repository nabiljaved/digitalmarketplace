<?php $page = 'index-6'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="container">
        <div class="side-social-media-six">
            <ul>
                <li>
                    <a href="javascript:void(0)"><i class="fa-brands fa-google"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa-brands fa-linkedin"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa-brands fa-twitter"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa-brands fa-whatsapp"></i></a>
                </li>
            </ul>
        </div>
        <div class="home-banner home-banner-six">
            <div class="row w-100 justify-content-center ">
                <div class="col-lg-6 col-12">
                    <div class="home-banner-main">
                        <img src="{{ URL::asset('/assets/img/banner-six-bg.png') }}" alt="Image" class="img-fluid">
                        <div class="home-banner-six-bg">
                            <img src="{{ URL::asset('/assets/img/banner-six-bg2.png') }}" alt="">
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-12">
                    <div class="home-banner-six-bottom">
                        <div class="home-banner-six-detergent">
                            <img src="{{ URL::asset('/assets/img/icons/cleaner-detergent.svg') }}" alt=""
                                class="img-fluid">
                            <h5>AFFORDABLE & RELIABLE</h5>
                        </div>
                        <h1>Professional Cleaning Service <span>You Can Trust</span></h1>
                        <p>Our professional cleaning service comes up with a complete solution that makes your
                            space sparkle!</p>
                        <div class="search-box-two search-box-six">
                            <form action="search">
                                <div class="search-input-new line-six">
                                    <div class="form-group mb-0">
                                        <select class="select">
                                            <option>Service Type</option>
                                            <option>Tornoto</option>
                                            <option>Texas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="search-input-new line-two-six">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control datetimepicker" placeholder="Select Date">
                                        <i class="feather-calendar"></i>
                                    </div>
                                </div>
                                <div class="search-btn">
                                    <button class="btn search_service" type="submit">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-six-side-img">
        <img src="{{ URL::asset('/assets/img/banner-six-side.png') }}" alt="">
    </div>
    </section>
    <!-- /Banner Section -->

    <!-- Choose Us -->
    <section class="reason-choose-us">
        <div class="container">
            <div class="section-heading section-heading-six">
                <div class="row">
                    <div class="col-md-6 col-12 aos" data-aos="fade-up">
                        <div class="reason-six">
                            <img src="{{ URL::asset('/assets/img/icons/cleaner-six.svg') }}" alt="">
                            <p>WHY TRUELY SELL?</p>
                        </div>
                        <h2>Reasons to <span>Choose Us</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="total-client-all">
                        <ul class="total-client-half">
                            <li class="total-client-mini">
                                <div class="total-experts-main">
                                    <h3>540</h3>
                                    <p>Total<span>Experts</span></p>
                                </div>
                            </li>
                            <li class="total-client-mini">
                                <div class="total-experts-main">
                                    <h3>540</h3>
                                    <p>Total<span>Experts</span></p>
                                </div>
                            </li>
                            <li>
                                <ul class="total-client-avatar">
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
                                    <li class="more-set">
                                        <a href="javascript:;">
                                            <i class="feather-plus"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="total-client-content">Our professional cleaning service comes up with a
                                    <span>complete solution that makes your space sparkle!</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="professional-cleaning-main">
                        <img src="{{ URL::asset('/assets/img/icons/quality-cleaning.svg') }}" alt="">
                        <h5>High Quality Cleaning</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="professional-cleaning-main">
                        <img src="{{ URL::asset('/assets/img/icons/cdn-globe.svg') }}" alt="">
                        <h5>Global Locations</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="professional-cleaning-main">
                        <img src="{{ URL::asset('/assets/img/icons/technical-support.svg') }}" alt="">
                        <h5>Anytime Support</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="professional-cleaning-main">
                        <img src="{{ URL::asset('/assets/img/icons/money-cash.svg') }}" alt="">
                        <h5>Spend Efficiently</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Choose Us -->

    <!-- About Our Company -->
    <section class="about-our-company">
        <div class="container">
            <div class="section-heading section-heading-six">
                <div class="row">
                    <div class="col-md-6 col-12 aos" data-aos="fade-up">
                        <div class="reason-six">
                            <img src="{{ URL::asset('/assets/img/icons/window-cleaner-detergent.svg') }}" alt="">
                            <p>BEST CLEANING SERVICE</p>
                        </div>
                        <h2><span>About </span>Our Company</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="our-company-six">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever
                            since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                            a type specimen book.</p>
                    </div>
                    <div class="aboutus-companyimg">
                        <a href>
                            <img src="{{ URL::asset('/assets/img/our-company-vd.jpg') }}" alt="img">
                        </a>
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#video">
                            <div class="playicon">
                                <span>
                                    <i class="feather-play"></i>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="our-company-ryt">
                        <div class="our-company-img">
                            <img src="{{ URL::asset('/assets/img/our-company-six.png') }}" alt="image"
                                class="img-fluid">
                        </div>
                        <div class="our-company-bg">
                            <img src="{{ URL::asset('/assets/img/our-company-six-bg.png') }}" alt="image"
                                class="img-fluid">
                        </div>
                        <div class="our-company-first-content">
                            <div class="company-top-content">
                                <p>Call us Today!</p>
                                <h3>+012 345678</h3>
                            </div>
                            <a href="javascript:;">
                                <i class="feather-arrow-right"></i>
                            </a>
                        </div>
                        <div class="our-company-two-content">
                            <div class="company-two-top-content">
                                <h4>12+</h4>
                                <img src="{{ URL::asset('/assets/img/icons/trophy.svg') }}" alt="">
                            </div>
                            <p>Years Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About Our Company -->

    <!-- Get Satisfied with the services Explore All -->
    <section class="satisfied-service-section">
        <div class="container">
            <div class="section-heading section-heading-six">
                <div class="row align-items-end">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <div class="reason-six">
                            <img src="{{ URL::asset('/assets/img/icons/cleaning-mop.svg') }}" alt="">
                            <p>AFFORDABLE & RELIABLE</p>
                        </div>
                        <h2>Get Satisfied with the <span>services</span></h2>
                    </div>
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <a href="{{ url('categories') }}" class="afford-btn">Explore All</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="get-service-main">
                        <span>
                            <img src="{{ URL::asset('/assets/img/icons/satisfied-1.svg') }}" alt="">
                        </span>
                        <a href="{{ url('service-details') }}">
                            <h5>Upholstery Cleaning</h5>
                        </a>
                        <div class="get-service-btn">
                            <a href="javascript:;">
                                View More <i class="ms-2 feather-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="get-service-main">
                        <span>
                            <img src="{{ URL::asset('/assets/img/icons/satisfied-2.svg') }}" alt="">
                        </span>
                        <a href="{{ url('service-details') }}">
                            <h5>Upholstery Cleaning</h5>
                        </a>
                        <div class="get-service-btn">
                            <a href="javascript:;">
                                View More <i class="ms-2 feather-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="get-service-main">
                        <span>
                            <img src="{{ URL::asset('/assets/img/icons/satisfied-3.svg') }}" alt="">
                        </span>
                        <a href="{{ url('service-details') }}">
                            <h5>Upholstery Cleaning</h5>
                        </a>
                        <div class="get-service-btn">
                            <a href="javascript:;">
                                View More <i class="ms-2 feather-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="get-service-main">
                        <span>
                            <img src="{{ URL::asset('/assets/img/icons/satisfied-4.svg') }}" alt="">
                        </span>
                        <a href="{{ url('service-details') }}">
                            <h5>Upholstery Cleaning</h5>
                        </a>
                        <div class="get-service-btn">
                            <a href="javascript:;">
                                View More <i class="ms-2 feather-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="get-service-main">
                        <span>
                            <img src="{{ URL::asset('/assets/img/icons/satisfied-5.svg') }}" alt="">
                        </span>
                        <a href="{{ url('service-details') }}">
                            <h5>Upholstery Cleaning</h5>
                        </a>
                        <div class="get-service-btn">
                            <a href="javascript:;">
                                View More <i class="ms-2 feather-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="get-service-main">
                        <span>
                            <img src="{{ URL::asset('/assets/img/icons/satisfied-5.svg') }}" alt="">
                        </span>
                        <a href="{{ url('service-details') }}">
                            <h5>Upholstery Cleaning</h5>
                        </a>
                        <div class="get-service-btn">
                            <a href="javascript:;">
                                View More <i class="ms-2 feather-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="get-service-main">
                        <span>
                            <img src="{{ URL::asset('/assets/img/icons/satisfied-7.svg') }}" alt="">
                        </span>
                        <a href="{{ url('service-details') }}">
                            <h5>Upholstery Cleaning</h5>
                        </a>
                        <div class="get-service-btn">
                            <a href="javascript:;">
                                View More <i class="ms-2 feather-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="get-service-main">
                        <span>
                            <img src="{{ URL::asset('/assets/img/icons/satisfied-8.svg') }}" alt="">
                        </span>
                        <a href="{{ url('service-details') }}">
                            <h5>Upholstery Cleaning</h5>
                        </a>
                        <div class="get-service-btn">
                            <a href="javascript:;">
                                View More <i class="ms-2 feather-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /Get Satisfied with the services Explore All -->

    <!-- See How It Works -->
    <section class="see-works-six-section">
        <div class="container">
            <div class="section-heading section-heading-six">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <div class="reason-six">
                            <img src="{{ URL::asset('/assets/img/icons/window-cleaner-detergent-1.svg') }}"
                                alt="">
                            <p>HOW WE ARE WORKING?</p>
                        </div>
                        <h2>See How It <span>Works</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="how-it-works-six">
                        <div class="works-six-num">
                            <h2>01</h2>
                        </div>
                        <div class="work-online-schedule">
                            <div class="work-online-img">
                                <img src="{{ URL::asset('/assets/img/works-six-1.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="work-online-bottom">
                                <img src="{{ URL::asset('/assets/img/icons/gui-calendar-planner.svg') }}" alt="">
                                <h4>Easy Online Scheduling</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="how-it-works-six">
                        <div class="works-six-num works-six-num-two">
                            <h2>02</h2>
                        </div>
                        <div class="work-online-schedule">
                            <div class="work-online-img">
                                <img src="{{ URL::asset('/assets/img/works-six-2.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="work-online-bottom work-online-bottom-two">
                                <h4>Get A Certified Cleaner</h4>
                                <img src="{{ URL::asset('/assets/img/icons/carpet.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="how-it-works-six">
                        <div class="works-six-num works-six-num-three">
                            <h2>03</h2>
                        </div>
                        <div class="work-online-schedule">
                            <div class="work-online-img">
                                <img src="{{ URL::asset('/assets/img/works-six-3.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="work-online-bottom">
                                <img src="{{ URL::asset('/assets/img/icons/like-svg.svg') }}" alt="">
                                <h4>Enjoy Cleanliness!</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /See How It Works -->

    <!-- Latest Blog -->
    <section class="blogs-service-section">
        <div class="container">
            <div class="section-heading section-heading-six">
                <div class="row align-items-end">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <div class="reason-six">
                            <img src="{{ URL::asset('/assets/img/icons/cleaning-mop.svg') }}" alt="">
                            <p>AFFORDABLE & RELIABLE</p>
                        </div>
                        <h2>Latest <span>Blog</span></h2>
                    </div>
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <a href="{{ url('categories') }}" class="afford-btn">Explore All</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-widget service-six aos" data-aos="fade-up">
                        <div class="service-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/services/service-60.png') }}">
                            </a>
                        </div>
                        <div class="service-content service-content-six">
                            <div class="latest-blog-six">
                                <div class="latest-blog-content">
                                    <h5>15<span>Dec</span></h5>
                                </div>
                                <div class="latest-profile-name">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg') }}" alt="">
                                    <h6>Annie Oakley</h6>
                                </div>
                            </div>
                            <h5 class="blog-import-service">Importance Of Professional Cleaning Services</h5>
                            <p>Importance Of Professional Cleaning ServicesImportance Of Professional Cleaning
                                Services</p>
                            <a href="javascript:;">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-widget service-six aos" data-aos="fade-up">
                        <div class="service-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/services/service-61.png') }}">
                            </a>
                        </div>
                        <div class="service-content service-content-six">
                            <div class="latest-blog-six">
                                <div class="latest-blog-content">
                                    <h5>07<span>Apr</span></h5>
                                </div>
                                <div class="latest-profile-name">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-12.jpg') }}" alt="">
                                    <h6>Annie Oakley</h6>
                                </div>
                            </div>
                            <h5 class="blog-import-service">Importance Of Professional Cleaning Services</h5>
                            <p>Importance Of Professional Cleaning ServicesImportance Of Professional Cleaning
                                Services</p>
                            <a href="javascript:;">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="service-widget service-six aos" data-aos="fade-up">
                        <div class="service-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/services/service-62.png') }}">
                            </a>
                        </div>
                        <div class="service-content service-content-six">
                            <div class="latest-blog-six">
                                <div class="latest-blog-content">
                                    <h5>02<span>Dec</span></h5>
                                </div>
                                <div class="latest-profile-name">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-19.jpg') }}" alt="">
                                    <h6>Annie Oakley</h6>
                                </div>
                            </div>
                            <h5 class="blog-import-service">Importance Of Professional Cleaning Services</h5>
                            <p>Importance Of Professional Cleaning ServicesImportance Of Professional Cleaning
                                Services</p>
                            <a href="javascript:;">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Latest Blog -->

    <!-- serve you the best cleaning service! -->
    <section class="our-expert-six-section">
        <div class="container">
            <div class="section-heading section-heading-six">
                <div class="row align-items-end">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <div class="reason-six">
                            <img src="{{ URL::asset('/assets/img/icons/window-cleaner-detergent.svg') }}" alt="">
                            <p>SERVE YOU THE BEST CLEANING SERVICE</p>
                        </div>
                        <h2>Our Expert <span>Team</span></h2>
                    </div>
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <a href="{{ url('categories') }}" class="afford-btn">Explore All</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="our-expert-six">
                        <div class="our-expert-img">
                            <img src="{{ URL::asset('/assets/img/gallery/gallery-04.jpg') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="our-expert-six-content">
                            <h6>William James</h6>
                            <p>Head In Industrial Cleaning</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5>$30.00<span>/hr</span></h5>
                            <a href="javascript:;" class="btn btn-primary btn-view-six">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="our-expert-six">
                        <div class="our-expert-img">
                            <img src="{{ URL::asset('/assets/img/gallery/gallery-05.jpg') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="our-expert-six-content">
                            <h6>William James</h6>
                            <p>Head In Industrial Cleaning</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5>$30.00<span>/hr</span></h5>
                            <a href="javascript:;" class="btn btn-primary btn-view-six">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="our-expert-six">
                        <div class="our-expert-img">
                            <img src="{{ URL::asset('/assets/img/gallery/gallery-06.jpg') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="our-expert-six-content">
                            <h6>William James</h6>
                            <p>Head In Industrial Cleaning</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5>$30.00<span>/hr</span></h5>
                            <a href="javascript:;" class="btn btn-primary btn-view-six">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="our-expert-six">
                        <div class="our-expert-img">
                            <img src="{{ URL::asset('/assets/img/gallery/gallery-07.jpg') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="our-expert-six-content">
                            <h6>William James</h6>
                            <p>Head In Industrial Cleaning</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5>$30.00<span>/hr</span></h5>
                            <a href="javascript:;" class="btn btn-primary btn-view-six">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /serve you the best cleaning service! -->

    <!-- Customer Reviews -->
    <section class="customer-reviews-six-section">
        <div class="container">
            <div class="section-heading section-heading-six">
                <div class="row align-items-end">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <div class="reason-six">
                            <img src="{{ URL::asset('/assets/img/icons/cleaning-mop.svg') }}" alt="">
                            <p>AFFORDABLE & RELIABLE</p>
                        </div>
                        <h2>Customer <span>Reviews</span></h2>
                    </div>
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <a href="{{ url('categories') }}" class="afford-btn">Explore All</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="customer-review-main-six">
                        <div class="customer-review-top">
                            <img src="{{ URL::asset('/assets/img/profiles/avatar-20.jpg') }}" alt="">
                            <h5>Maria Williams</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered.</p>
                        </div>
                        <div class="customer-review-bottom">
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="customer-review-quote">
                            <img src="{{ URL::asset('/assets/img/icons/reviews-quote.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="customer-review-main-six">
                        <div class="customer-review-top">
                            <img src="{{ URL::asset('/assets/img/profiles/avatar-18.jpg') }}" alt="">
                            <h5>Bella Williams</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered.</p>
                        </div>
                        <div class="customer-review-bottom">
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="customer-review-quote">
                            <img src="{{ URL::asset('/assets/img/icons/reviews-quote.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="customer-review-main-six">
                        <div class="customer-review-top">
                            <img src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg') }}" alt="">
                            <h5>Cristina Williams</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered.</p>
                        </div>
                        <div class="customer-review-bottom">
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="customer-review-quote">
                            <img src="{{ URL::asset('/assets/img/icons/reviews-quote.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Customer Reviews -->

    <!-- See How It Works -->
    <section class="hidden-charge-section">
        <div class="container">
            <div class="section-heading section-heading-six">
                <div class="row justify-content-center text-center">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <div class="reason-six justify-content-center">
                            <img src="{{ URL::asset('/assets/img/icons/vacuum-cleaner.svg') }}" alt="">
                            <p>NO EXTRA HIDDEN CHARGES!</p>
                        </div>
                        <h2>Choose Your <span>Plan</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="hidden-charge-main">
                        <div class="hidden-charge-img">
                            <img src="{{ URL::asset('/assets/img/icons/charges-3.svg') }}" alt="">
                        </div>
                        <h4>Standard</h4>
                        <ul>
                            <li>Experienced & Trained Cleaner</li>
                            <li>Maintenance Cleaning</li>
                            <li>Insured Liability ans Cleaning</li>
                            <li>Planed Holiday Cover</li>
                            <li>Experienced & Trained Cleaner</li>
                        </ul>
                        <div class="hidden-charges-bottom-mark">
                            <h1>$15<span>/hr</span></h1>
                            <h6>PER MONTH</h6>
                        </div>
                        <a href="javascript:;" class="btn btn-primary btn-charges w-100">Book Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="hidden-charge-main hidden-charge-main-two">
                        <div class="hidden-charge-img">
                            <img src="{{ URL::asset('/assets/img/icons/charges-2.svg') }}" alt="">
                        </div>
                        <h4>Premium</h4>
                        <ul>
                            <li>Experienced & Trained Cleaner</li>
                            <li>Maintenance Cleaning</li>
                            <li>Insured Liability ans Cleaning</li>
                            <li>Planed Holiday Cover</li>
                            <li>Experienced & Trained Cleaner</li>
                            <li>Maintenance Cleaning</li>
                            <li>Insured Liability ans Cleaning</li>
                        </ul>
                        <div class="hidden-charges-bottom-mark">
                            <h1>$100<span>/hr</span></h1>
                            <h6>PER MONTH</h6>
                        </div>
                        <a href="javascript:;" class="btn btn-primary btn-charges btn-plan w-100">Book Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="hidden-charge-main">
                        <div class="hidden-charge-img">
                            <img src="{{ URL::asset('/assets/img/icons/charges-1.svg') }}" alt="">
                        </div>
                        <h4>Enterprise</h4>
                        <ul>
                            <li>Experienced & Trained Cleaner</li>
                            <li>Maintenance Cleaning</li>
                            <li>Insured Liability ans Cleaning</li>
                            <li>Planed Holiday Cover</li>
                            <li>Experienced & Trained Cleaner</li>
                        </ul>
                        <div class="hidden-charges-bottom-mark">
                            <h1>$56<span>/hr</span></h1>
                            <h6>PER MONTH</h6>
                        </div>
                        <a href="javascript:;" class="btn btn-primary btn-charges w-100">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- App Section -->
    <section class="app-six-section">
        <div class="container">
            <div class="app-sec app-sec-six">
                <div class="app-sec-main">
                    <div class="app-imgs-six-bg">
                        <img src="{{ URL::asset('/assets/img/new-app-six-bg.png') }}" alt="">
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-12">
                            <div class="appimg-six aos" data-aos="fade-up">
                                <img src="{{ URL::asset('/assets/img/new-app-img.png') }}" class="img-fluid"
                                    alt="img">
                                <div class="app-img-sec">
                                    <img src="{{ URL::asset('/assets/img/new-app-sec-ng.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="new-app-six-middle">
                                <div class="heading aos" data-aos="fade-up">
                                    <h2>Download <span>Our New App</span></h2>
                                    <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla
                                        ut metus varius laoreet.Aliquam lorem ante.</p>
                                </div>
                                <div class="new-app-six-bottom aos" data-aos="fade-up">
                                    <div class="new-app-six-content">
                                        <a href="javascript:;"><img
                                                src="{{ URL::asset('/assets/img/icons/googleplay-six.svg') }}"
                                                class="img-fluid new-six-img" alt="img"></a>
                                        <a href="javascript:;"><img
                                                src="{{ URL::asset('/assets/img/icons/appstore-six.svg') }}"
                                                class="img-fluid" alt="img"></a>
                                    </div>
                                    <a href="javascript:;" target="_blank">
                                        <img src="{{ URL::asset('/assets/img/icons/scan-six.svg') }}" class="img-fluid"
                                            alt="img">
                                    </a>
                                </div>
                            </div>
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
