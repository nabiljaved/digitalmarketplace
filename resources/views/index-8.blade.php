<?php $page = 'index-8'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Hero Section -->
    <section class="hero-section-eight">
        <div class="container">
            <div class="home-banner-eight">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-10 mx-auto">
                        <div class="section-search aos" data-aos="fade-up">
                            <h1><img src="{{ URL::asset('/assets/img/icons/dog.svg') }}" alt=""> This is the only
                                place for all your <span>pet care</span></h1>
                            <div class="home-eight-bg">
                                <img src="{{ URL::asset('/assets/img/her-section-eight-bg.png') }}" alt="">
                            </div>
                            <p>The Best Selection For your pet’s needs. A life saving impact from pets in communities across
                                the country.</p>
                            <div class="home-banner-eight-icon">
                                <ul>
                                    <li>
                                        <i class="fa fa-check-circle"></i>
                                        <span>Dog Training</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle"></i>
                                        <span>Pet Sitting</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle"></i>
                                        <span>Vet on Call</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle"></i>
                                        <span>Vaccination</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="search-box-two search-box-eight">
                                <form action="search">
                                    <div class="search-input-new line-six">
                                        <div class="form-group mb-0">
                                            <select class="select">
                                                <option>Service Category</option>
                                                <option>Tornoto</option>
                                                <option>Texas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="search-input-new line-two-six">
                                        <div class="form-group mb-0">
                                            <i class="feather-map-pin"></i>
                                            <input type="text" class="form-control" placeholder="Location">

                                        </div>
                                    </div>
                                    <div class="search-btn">
                                        <button class="btn search_service" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="home-eight-dog">
                                <img src="{{ URL::asset('/assets/img/hero-section-eight.png') }}" alt="image"
                                    class="img-fluid">
                            </div>
                            <div class="home-eight-bg-two">
                                <img src="{{ URL::asset('/assets/img/her-section-eight-bg.png') }}" alt="">
                                <div class="home-eight-dog-feet">
                                    <img src="{{ URL::asset('/assets/img/icons/eight-dog-feet.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- pricing Section -->
    <section class="category-sections-eight">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading section-heading-eight aos" data-aos="fade-up">
                        <img src="{{ URL::asset('/assets/img/icons/dog.svg') }}" alt="">
                        <h2>Pricing Plan</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel category-eight-slider">
                        <div class="category-eight-main">
                            <div class="category-eight-img">
                                <img src="{{ URL::asset('/assets/img/gallery/gallery-08.jpg') }}" alt="">
                            </div>
                            <div class="category-eight-img-inside">
                                <a href="{{ url('search') }}">
                                    <img src="{{ URL::asset('/assets/img/icons/dog-feet.svg') }}" alt="">
                                    Read more
                                </a>
                            </div>
                            <h6>Pet Adoption</h6>
                            <span>65 Products</span>
                        </div>
                        <div class="category-eight-main">
                            <div class="category-eight-img">
                                <img src="{{ URL::asset('/assets/img/gallery/gallery-09.jpg') }}" alt="">
                            </div>
                            <div class="category-eight-img-inside">
                                <a href="{{ url('search') }}">
                                    <img src="{{ URL::asset('/assets/img/icons/dog-feet.svg') }}" alt="">
                                    Read more
                                </a>
                            </div>
                            <h6>Pet Boarding</h6>
                            <span>65 Products</span>
                        </div>
                        <div class="category-eight-main">
                            <div class="category-eight-img">
                                <img src="{{ URL::asset('/assets/img/gallery/gallery-10.jpg') }}" alt="">
                            </div>
                            <div class="category-eight-img-inside">
                                <a href="{{ url('search') }}">
                                    <img src="{{ URL::asset('/assets/img/icons/dog-feet.svg') }}" alt="">
                                    Read more
                                </a>
                            </div>
                            <h6>Foods</h6>
                            <span>15 Products</span>
                        </div>
                        <div class="category-eight-main">
                            <div class="category-eight-img">
                                <img src="{{ URL::asset('/assets/img/gallery/gallery-11.jpg') }}" alt="">
                            </div>
                            <div class="category-eight-img-inside">
                                <a href="{{ url('search') }}">
                                    <img src="{{ URL::asset('/assets/img/icons/dog-feet.svg') }}" alt="">
                                    Read more
                                </a>
                            </div>
                            <h6>Health</h6>
                            <span>35 Products</span>
                        </div>
                        <div class="category-eight-main">
                            <div class="category-eight-img">
                                <img src="{{ URL::asset('/assets/img/gallery/gallery-12.jpg') }}" alt="">
                            </div>
                            <div class="category-eight-img-inside">
                                <a href="{{ url('search') }}">
                                    <img src="{{ URL::asset('/assets/img/icons/dog-feet.svg') }}" alt="">
                                    Read more
                                </a>
                            </div>
                            <h6>Pet Supplies</h6>
                            <span>65 Products</span>
                        </div>
                        <div class="category-eight-main">
                            <div class="category-eight-img">
                                <img src="{{ URL::asset('/assets/img/gallery/gallery-13.jpg') }}" alt="">
                            </div>
                            <div class="category-eight-img-inside">
                                <a href="{{ url('search') }}">
                                    <img src="{{ URL::asset('/assets/img/icons/dog-feet.svg') }}" alt="">
                                    Read more
                                </a>
                            </div>
                            <h6>Pet Grooming</h6>
                            <span>65 Products</span>
                        </div>
                        <div class="category-eight-main">
                            <div class="category-eight-img">
                                <img src="{{ URL::asset('/assets/img/gallery/gallery-12.jpg') }}" alt="">
                            </div>
                            <div class="category-eight-img-inside">
                                <a href="{{ url('search') }}">
                                    <img src="{{ URL::asset('/assets/img/icons/dog-feet.svg') }}" alt="">
                                    Read more
                                </a>
                            </div>
                            <h6>Pet Grooming</h6>
                            <span>65 Products</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-sec btn-saloons btn-pets aos" data-aos="fade-up">
                <a href="{{ url('search') }}" class="btn btn-primary btn-view">VIEW ALL CATEGORIES</a>
            </div>
        </div>
    </section>

    <section class="popular-eight-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading section-heading-eight aos" data-aos="fade-up">
                        <img src="{{ URL::asset('/assets/img/icons/dog.svg') }}" alt="">
                        <h2>Popular Services</h2>
                        <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="service-widget aos" data-aos="fade-up">
                        <div class="service-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/gallery/gallery-14.jpg') }}">
                            </a>
                            <div class="fav-item ">
                                <div class="features-service-five features-service-eight">
                                    <h6>Pet Health</h6>
                                </div>
                                <a href="javascript:void(0)" class="fav-icon fav-icon-five">
                                    <i class="feather-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="service-content service-feature-eight">
                            <div class="shop-content-logo">
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg') }}" alt="">
                            </div>
                            <h3 class="title">
                                <a href="{{ url('service-details') }}">Ear Cleaning & Plucking</a>
                            </h3>
                            <p><i class="feather-map-pin"></i>New Jersey, USA</p>
                            <div class="feature-services-eight">
                                <div class="popular-service-eight">
                                    <h6>$350<span>/hr</span></h6>
                                    <p>$450</p>
                                </div>
                                <div class="rate">
                                    <div class="rate-icon">
                                        <i class="fas fa-star filled"></i><span>4.8</span>
                                    </div>
                                    <h6>(50)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="service-widget aos" data-aos="fade-up">
                        <div class="service-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/gallery/gallery-15.jpg') }}">
                            </a>
                            <div class="fav-item ">
                                <div class="features-service-five features-service-eight">
                                    <h6>Pet Health</h6>
                                </div>
                                <a href="javascript:void(0)" class="fav-icon fav-icon-five">
                                    <i class="feather-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="service-content service-feature-eight">
                            <div class="shop-content-logo">
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-07.jpg') }}" alt="">
                            </div>
                            <h3 class="title">
                                <a href="{{ url('service-details') }}">Ear Cleaning & Plucking</a>
                            </h3>
                            <p><i class="feather-map-pin"></i>New Jersey, USA</p>
                            <div class="feature-services-eight">
                                <div class="popular-service-eight">
                                    <h6>$250<span>/hr</span></h6>
                                    <p>$350</p>
                                </div>
                                <div class="rate">
                                    <div class="rate-icon">
                                        <i class="fas fa-star filled"></i><span>4.8</span>
                                    </div>
                                    <h6>(60)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="service-widget aos" data-aos="fade-up">
                        <div class="service-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/gallery/gallery-16.jpg') }}">
                            </a>
                            <div class="fav-item ">
                                <div class="features-service-five features-service-eight">
                                    <h6>Pet Grooming</h6>
                                </div>
                                <a href="javascript:void(0)" class="fav-icon fav-icon-five">
                                    <i class="feather-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="service-content service-feature-eight">
                            <div class="shop-content-logo">
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg') }}" alt="">
                            </div>
                            <h3 class="title">
                                <a href="{{ url('service-details') }}">Ear Cleaning & Plucking</a>
                            </h3>
                            <p><i class="feather-map-pin"></i>New Jersey, USA</p>
                            <div class="feature-services-eight">
                                <div class="popular-service-eight">
                                    <h6>$650<span>/hr</span></h6>
                                    <p>$850</p>
                                </div>
                                <div class="rate">
                                    <div class="rate-icon">
                                        <i class="fas fa-star filled"></i><span>4.8</span>
                                    </div>
                                    <h6>(90)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="service-widget aos" data-aos="fade-up">
                        <div class="service-img">
                            <a href="{{ url('service-details') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/assets/img/gallery/gallery-17.jpg') }}">
                            </a>
                            <div class="fav-item ">
                                <div class="features-service-five features-service-eight">
                                    <h6>Pet Grooming</h6>
                                </div>
                                <a href="javascript:void(0)" class="fav-icon fav-icon-five">
                                    <i class="feather-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="service-content service-feature-eight">
                            <div class="shop-content-logo">
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-15.jpg') }}" alt="">
                            </div>
                            <h3 class="title">
                                <a href="{{ url('service-details') }}">Ear Cleaning & Plucking</a>
                            </h3>
                            <p><i class="feather-map-pin"></i>New Jersey, USA</p>
                            <div class="feature-services-eight">
                                <div class="popular-service-eight">
                                    <h6>$350<span>/hr</span></h6>
                                    <p>$450</p>
                                </div>
                                <div class="rate">
                                    <div class="rate-icon">
                                        <i class="fas fa-star filled"></i><span>4.8</span>
                                    </div>
                                    <h6>(50)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-sec btn-saloons btn-pets aos" data-aos="fade-up">
                <a href="{{ url('search') }}" class="btn btn-primary btn-view">VIEW ALL SERVICES</a>
            </div>
        </div>
    </section>

    <section class="works-eight-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading section-heading-eight aos" data-aos="fade-up">
                        <img src="{{ URL::asset('/assets/img/icons/dog.svg') }}" alt="">
                        <h2>How it Works</h2>
                        <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="works-eights-main">
                        <div class="works-eights-img">
                            <img src="{{ URL::asset('/assets/img/icons/gui-calendar-planner-eight.svg') }}"
                                alt="">
                            <div class="works-eights-arrow">
                                <img src="{{ URL::asset('/assets/img/icons/arrow-eight-1.svg') }}" alt="">
                            </div>
                        </div>
                        <p>Connect with your Calendar</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="works-eights-main">
                        <div class="works-eights-img">
                            <img src="{{ URL::asset('/assets/img/icons/pointer-eight.svg') }}" alt="">
                            <div class="works-eights-arrow works-eights-arrow-two">
                                <img src="{{ URL::asset('/assets/img/icons/arrow-eight-2.svg') }}" alt="">
                            </div>
                        </div>
                        <p>Connect with your Calendar</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="works-eights-main">
                        <div class="works-eights-img">
                            <img src="{{ URL::asset('/assets/img/icons/dog-face-eight.svg') }}" alt="">
                            <div class="works-eights-arrow">
                                <img src="{{ URL::asset('/assets/img/icons/arrow-eight-1.svg') }}" alt="">
                            </div>
                        </div>
                        <p>Connect with your Calendar</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="works-eights-main">
                        <div class="works-eights-img">
                            <img src="{{ URL::asset('/assets/img/icons/pay-per-eight.svg') }}" alt="">
                        </div>
                        <p>Connect with your Calendar</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us-eight-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="about-eight-main">
                        <img src="{{ URL::asset('/assets/img/about-us-eight.png') }}" alt="">
                        <div class="truely-eight-bg">
                            <img src="{{ URL::asset('/assets/img/her-section-eight-bg.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="truely-eight-bg-two">
                            <img src="{{ URL::asset('/assets/img/her-section-eight-bg.png') }}" alt="">
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-12">
                    <div class="passion-eight-all">
                        <div class="section-heading section-heading-eight passion-eight-heading aos" data-aos="fade-up">
                            <img src="{{ URL::asset('/assets/img/icons/dog.svg') }}" alt="">
                            <h2>About Truely sell pet care</h2>
                            <p>Mauris ut cursus nunc. </p>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <ul>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/pink-dog-feet.svg') }}" alt="">
                                <span>The Pet Expert</span>
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/pink-dog-feet.svg') }}" alt="">
                                <span>Love Your Pet More</span>
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/pink-dog-feet.svg') }}" alt="">
                                <span>Your Pet, Our Passion</span>
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/pink-dog-feet.svg') }}" alt="">
                                <span>The Pet Expert</span>
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/pink-dog-feet.svg') }}" alt="">
                                <span>Love Your Pet More</span>
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/icons/pink-dog-feet.svg') }}" alt="">
                                <span>Your Pet, Our Passion</span>
                            </li>
                        </ul>
                        <div class="passion-eight-content">
                            <div class="passion-content-top">
                                <img src="{{ URL::asset('/assets/img/icons/win.svg') }}" alt="">
                                <div class="passion-content-bottom">
                                    <h2>98.7%</h2>
                                    <p>of reviews are 5 star</p>
                                </div>
                                <a href="javascript:;" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cat-dog-eight-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="clients-eights-all">
                                <div class="clients-eight-span">
                                    <h3 class="counter">644</h3>
                                    <span>+</span>
                                </div>
                                <p>Active Clients</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="clients-eights-all">
                                <div class="clients-eight-span">
                                    <h3 class="counter">356</h3>
                                    <span>+</span>
                                </div>
                                <p>Professionals</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="clients-eights-all">
                                <div class="clients-eight-span">
                                    <h3 class="counter">123</h3>
                                    <span>+</span>
                                </div>
                                <p>Pet Services</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="clients-eights-all">
                                <div class="clients-eight-span">
                                    <h3 class="counter">965</h3>
                                    <span>+</span>
                                </div>
                                <p>Awards</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="professional-eight-img">
                        <img src="{{ URL::asset('/assets/img/professional-eight.png') }}" alt=""
                            class="img-fluid">
                        <div class="professional-eight-bg">
                            <img src="{{ URL::asset('/assets/img/her-section-eight-bg.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="meet-eight-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading section-heading-eight aos" data-aos="fade-up">
                        <img src="{{ URL::asset('/assets/img/icons/dog.svg') }}" alt="">
                        <h2>Meet our professionals</h2>
                        <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel professional-eight-slider">
                        <div class="professional-eight-main">
                            <div class="professional-eight-img-ryt">
                                <img src="{{ URL::asset('/assets/img/gallery/gallery-15.jpg') }}" alt="">
                            </div>
                            <div class="professional-eight-img-inside">
                                <a href="javascript:;">
                                    <img src="{{ URL::asset('/assets/img/icons/dog-feet.svg') }}" alt="">
                                    Read more
                                </a>
                            </div>
                            <a href="{{ url('service-details') }}">
                                <h6>Caroline Williams</h6>
                            </a>
                            <span class="act">2 Years Experience</span>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span>(10)</span>
                            </div>
                        </div>
                        <div class="professional-eight-main">
                            <div class="professional-eight-img-ryt">
                                <img src="{{ URL::asset('/assets/img/gallery/gallery-14.jpg') }}" alt="">
                            </div>
                            <div class="professional-eight-img-inside">
                                <a href="javascript:;">
                                    <img src="{{ URL::asset('/assets/img/icons/dog-feet.svg') }}" alt="">
                                    Read more
                                </a>
                            </div>
                            <a href="{{ url('service-details') }}">
                                <h6>Caroline Williams</h6>
                            </a>
                            <span class="act">2 Years Experience</span>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fa-solid fa-star-half-stroke filled"></i>
                                <span>(10)</span>
                            </div>
                        </div>
                        <div class="professional-eight-main">
                            <div class="professional-eight-img-ryt">
                                <img src="{{ URL::asset('/assets/img/gallery/gallery-17.jpg') }}" alt="">
                            </div>
                            <div class="professional-eight-img-inside">
                                <a href="javascript:;">
                                    <img src="{{ URL::asset('/assets/img/icons/dog-feet.svg') }}" alt="">
                                    Read more
                                </a>
                            </div>
                            <a href="{{ url('service-details') }}">
                                <h6>Caroline Williams</h6>
                            </a>
                            <span class="act">2 Years Experience</span>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span>(10)</span>
                            </div>
                        </div>
                        <div class="professional-eight-main">
                            <div class="professional-eight-img-ryt">
                                <img src="{{ URL::asset('/assets/img/gallery/gallery-16.jpg') }}" alt="">
                            </div>
                            <div class="professional-eight-img-inside">
                                <a href="javascript:;">
                                    <img src="{{ URL::asset('/assets/img/icons/dog-feet.svg') }}" alt="">
                                    Read more
                                </a>
                            </div>
                            <a href="{{ url('service-details') }}">
                                <h6>Caroline Williams</h6>
                            </a>
                            <span class="act">2 Years Experience</span>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span>(10)</span>
                            </div>
                        </div>
                        <div class="professional-eight-main">
                            <div class="professional-eight-img-ryt">
                                <img src="{{ URL::asset('/assets/img/gallery/gallery-15.jpg') }}" alt="">
                            </div>
                            <div class="professional-eight-img-inside">
                                <a href="javascript:;">
                                    <img src="{{ URL::asset('/assets/img/icons/dog-feet.svg') }}" alt="">
                                    Read more
                                </a>
                            </div>
                            <a href="{{ url('service-details') }}">
                                <h6>Caroline Williams</h6>
                            </a>
                            <span class="act">2 Years Experience</span>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fa-solid fa-star-half-stroke filled"></i>
                                <span>(10)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customers-eight-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="customers-eights-all">
                        <div class="section-heading section-heading-eight customers-eight-heading aos" data-aos="fade-up">
                            <img src="{{ URL::asset('/assets/img/icons/dog.svg') }}" alt="">
                            <h2>Over 1000+ Customers
                                with 5-Star Reviews</h2>
                            <p>Mauris ut cursus nunc. </p>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry.</p>
                        <ul class="total-client-avatar total-client-avatar-seven">
                            <li>
                                <a href="javascript:;">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-06.jpg') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-07.jpg') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-08.jpg') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg') }}" alt="">
                                </a>
                            </li>
                        </ul>
                        <p class="customers-icons"><i class="fas fa-star filled"></i><span>4.9</span>/1000 Reviews</p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="owl-carousel testimonals-eight-slider">
                        <div class="testimonials-main-ryt customers-eight-main">
                            <div class="testimonials-content-seven">
                                <div class="testimonials-seven-img">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-17.jpg') }}" alt="">
                                </div>
                                <img src="{{ URL::asset('/assets/img/icons/test-quote.svg') }}" alt=""
                                    class="img-fluid">
                            </div>
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
                            <p>There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form, by injected humour, or randomised
                                words which don</p>
                        </div>
                        <div class="testimonials-main-ryt customers-eight-main">
                            <div class="testimonials-content-seven">
                                <div class="testimonials-seven-img">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-17.jpg') }}" alt="">
                                </div>
                                <img src="{{ URL::asset('/assets/img/icons/test-quote.svg') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="testimonials-img-content">
                                <h6>James Williams</h6>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i>
                                </div>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form, by injected humour, or randomised
                                words which don</p>
                        </div>
                        <div class="testimonials-main-ryt customers-eight-main">
                            <div class="testimonials-content-seven">
                                <div class="testimonials-seven-img">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-17.jpg') }}" alt="">
                                </div>
                                <img src="{{ URL::asset('/assets/img/icons/test-quote.svg') }}" alt=""
                                    class="img-fluid">
                            </div>
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
                            <p>There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form, by injected humour, or randomised
                                words which don</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-eight-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading section-heading-eight aos" data-aos="fade-up">
                        <img src="{{ URL::asset('/assets/img/icons/dog.svg') }}" alt="">
                        <h2>Our Blog </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel blog-eight-slider">
                        <div class="service-widget service-widget-eight aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('blog-details') }}">
                                    <img class="img-fluid" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/blog/blog-09.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content service-eight-blogs">
                                <h3 class="title">
                                    <a href="{{ url('blog-details') }}">Top Grooming tips for your dog for this summer</a>
                                </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard.</p>
                                <div class="usefull-bottom useful-bottom-eight">
                                    <div class="useful-img">
                                        <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg') }}" alt="">
                                        <span>Admin</span>
                                    </div>
                                    <h6><i class="feather-tag"></i>Grooming</h6>
                                </div>
                            </div>
                            <div class="service-eight-img-inside">
                                <a href="{{ url('blog-details') }}">
                                    <img src="{{ URL::asset('/assets/img/icons/dog-feet.svg') }}" alt="">
                                    Read more
                                </a>
                            </div>
                        </div>
                        <div class="service-widget service-widget-eight aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('blog-details') }}">
                                    <img class="img-fluid" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/blog/blog-10.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content service-eight-blogs">
                                <h3 class="title">
                                    <a href="{{ url('blog-details') }}">Top Grooming tips for your dog for this
                                        summer</a>
                                </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard.</p>
                                <div class="usefull-bottom useful-bottom-eight">
                                    <div class="useful-img">
                                        <img src="{{ URL::asset('/assets/img/profiles/avatar-20.jpg') }}"
                                            alt="">
                                        <span>Admin</span>
                                    </div>
                                    <h6><i class="feather-tag"></i>Grooming</h6>
                                </div>
                            </div>
                            <div class="service-eight-img-inside">
                                <a href="{{ url('blog-details') }}">
                                    <img src="{{ URL::asset('/assets/img/icons/dog-feet.svg') }}" alt="">
                                    Read more
                                </a>
                            </div>
                        </div>
                        <div class="service-widget service-widget-eight aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('blog-details') }}">
                                    <img class="img-fluid" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/blog/blog-11.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content service-eight-blogs">
                                <h3 class="title">
                                    <a href="{{ url('blog-details') }}">Top Grooming tips for your dog for this
                                        summer</a>
                                </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard.</p>
                                <div class="usefull-bottom useful-bottom-eight">
                                    <div class="useful-img">
                                        <img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg') }}"
                                            alt="">
                                        <span>Admin</span>
                                    </div>
                                    <h6><i class="feather-tag"></i>Grooming</h6>
                                </div>
                            </div>
                            <div class="service-eight-img-inside">
                                <a href="{{ url('blog-details') }}">
                                    <img src="{{ URL::asset('/assets/img/icons/dog-feet.svg') }}" alt="">
                                    Read more
                                </a>
                            </div>
                        </div>
                        <div class="service-widget service-widget-eight aos" data-aos="fade-up">
                            <div class="service-img">
                                <a href="{{ url('blog-details') }}">
                                    <img class="img-fluid" alt="Service Image"
                                        src="{{ URL::asset('/assets/img/blog/blog-10.jpg') }}">
                                </a>
                            </div>
                            <div class="service-content service-eight-blogs">
                                <h3 class="title">
                                    <a href="{{ url('blog-details') }}">Top Grooming tips for your dog for this
                                        summer</a>
                                </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard.</p>
                                <div class="usefull-bottom useful-bottom-eight">
                                    <div class="useful-img">
                                        <img src="{{ URL::asset('/assets/img/profiles/avatar-13.jpg') }}"
                                            alt="">
                                        <span>Admin</span>
                                    </div>
                                    <h6><i class="feather-tag"></i>Grooming</h6>
                                </div>
                            </div>
                            <div class="service-eight-img-inside">
                                <a href="{{ url('blog-details') }}">
                                    <img src="{{ URL::asset('/assets/img/icons/dog-feet.svg') }}" alt="">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-sec btn-saloons btn-pets aos" data-aos="fade-up">
                <a href="{{ url('search') }}" class="btn btn-primary btn-view">VIEW ALL BLOGS</a>
            </div>
        </div>
    </section>

    <section class="healthy-eight-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="pets-content-all">
                        <h2>Keeping your pets</h2>
                        <h1>Happy, Healthy And Safe!</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry.
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry.</p>
                        <a href="javascript:;" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="healthy-pets-img">
                        <img src="{{ URL::asset('/assets/img/healthy-pets.png') }}" alt="" class="img-fluid">
                        <div class="healthy-eight-bg">
                            <img src="{{ URL::asset('/assets/img/her-section-eight-bg.png') }}" alt="">
                        </div>
                        <div class="healthy-eight-bg-two">
                            <img src="{{ URL::asset('/assets/img/her-section-eight-bg.png') }}" alt="">
                        </div>
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
