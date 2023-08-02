<?php $page = 'index'; ?>
@extends('layout.mainlayout')
@section('content')

<style>
 

    .search-input {
        display: flex;
        align-items: center;
    }

    .label-right {
        margin-right: 20px !important;
        white-space: nowrap; Prevent label from wrapping to a new line
    }

    .search-input .form-control {
        flex: 1;
    }
    
</style>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
               <div style="margin:20px">
               
               @if(session('success'))
                    <div id="flash-message" class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div id="flash-message" class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

             

        </div>
            <div class="home-banner">
                <div class="row align-items-center w-100">
                    <div class="col-lg-7 col-md-10 mx-auto">
                        <div class="section-search aos" data-aos="fade-up">
                            <h1>Professional Services For Your Digital MArketing </h1>
                            <p>Search From 100+ Awesome Services !</p>
                            <div class="search-box">
                                <form action="search" onsubmit="event.preventDefault(); redirectToService();" >
                                    <div class="search-input line">
                                        <div class="search-group-icon">
                                        <i class="feather-search"></i>
                                        </div>
                                        <div class="form-group mb-0" >
                                            <label class="label-right">What are you looking for?</label>
                                            <!-- <input type="text" class="form-control" placeholder="Dubai"> -->
                                        </div>
                                    </div>
                                    <div class="search-input" style="display: flex; ">
                                        <div class="form-group mb-0" style="flex: 1;margin-left:5px">
                                            <select class="form-control" id="serviceSelect">
                                                <option value="">Select a service</option>
                                                @foreach ($services as $service)
                                                    <option value="{{ route('service-details', ['slug' => $service['service_slug']]) }}">
                                                        {{ $service['service_title'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="search-btn">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="feather-search me-2"></i>Search
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="banner-imgs">
                            <div class="banner-1 shape-1">
                                <img class="img-fluid" alt="banner" src="{{ URL::asset('/assets/img/banner1.png') }}">
                            </div>
                            <div class="banner-2 shape-3">
                                <img class="img-fluid" alt="banner" src="{{ URL::asset('/assets/img/banner2.png') }}">
                            </div>
                            <div class="banner-3 shape-3">
                                <img class="img-fluid" alt="banner" src="{{ URL::asset('/assets/img/banner3.png') }}">
                            </div>
                            <div class="banner-4 shape-2">
                                <img class="img-responsive" alt="banner"
                                    src="{{ URL::asset('/assets/img/banner4.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- Feature Section -->
    <section class="feature-section">
        <div class="container">
            <div class="section-heading">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2>Featured Categories</h2>
                        <p>What do you need to find?</p>
                    </div>
                    <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                        <!-- <a href="{{ url('categories') }}" class="btn btn-primary btn-view">View All<i
                                class="feather-arrow-right-circle"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="row">
             @foreach($categories as $category)
                <div class="col-md-6 col-lg-3" >
                    <a href="{{ route('index-categories', ['slug' => $category->category_slug]) }}" class="feature-box aos" data-aos="fade-up">
                        <div class="feature-icon" >
                          
                                <img src="{{ asset('uploads/categories/' . $category->category_image) }}" alt="{{$category->category_image}}" >
                           
                        </div>
                        <h5>{{ substr($category->category_name, 0, 20)}}...</h5>
                    <div class="feature-overlay">
                        <img src="{{ asset('uploads/categories/' . $category->category_image) }}" alt="{{$category->category_image}}">
                    </div>
                    </a>
                </div>
            @endforeach
              
            </div>
        </div>
    </section>
    <!-- /Feature Section -->

    <!-- Service Section -->
    <section class="service-section">
        <div class="container">
            <div class="section-heading">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2>Featured Services</h2>
                        <p>Explore the greates our services. You won’t be disappointed</p>
                    </div>
                    <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                        <div class="owl-nav mynav"></div>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-12">
           <div class="owl-carousel service-slider">

                    @foreach($services as $service)
                    
                    @php
                        $category = $categories->where('id', $service->service_category)->first();
                    @endphp

                @php
                    $selectedImagesArray = json_decode($service->selected_images);
                @endphp

                @if($service->service_isFeatured == 1) 
                    <div class="service-widget aos" data-aos="fade-up">
                        <div class="service-img">
                            <a href="{{ route('service-details', ['slug' => $service->service_slug]) }}">
                                @if(isset($selectedImagesArray) && is_array($selectedImagesArray) && count($selectedImagesArray) > 0)
                                    <img src="{{ asset('uploads/services/' . $selectedImagesArray[0]) }}" alt="Service Image">
                                @else
                                    <img class="img-fluid serv-img" alt="Service Image" src="{{ asset('/assets/img/services/service-01.jpg') }}">
                                @endif
                            </a>
                            <div class="fav-item">
                                <a href="{{ route('index-categories', ['slug' => $category->category_slug]) }}"><span class="item-cat">{{ $category->category_name }}</span></a>
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>
                            </div>
                            <div class="item-info">
                                <!-- <a href="{{ route('service-details', ['slug' => $service->service_slug ]) }}"><span class="item-img"><img src="{{ URL::asset('/assets/img/logo.png') }}" class="avatar" alt=""></span></a> -->
                            </div>
                        </div>  
                        <div class="service-content">
                            <h3 class="title">
                                <a href="{{ route('service-details', ['slug' => $service->service_slug ]) }}">{{ $service->service_title }}</a>
                            </h3>
                            <p><i class="feather-map-pin"></i>Digital Market, UAE<span class="rate"><i class="fas fa-star filled"></i>4.9</span></p>
                            <div class="serv-info">
                                <h6>AED {{ $service->service_price }}<span class="old-price">AED {{ $service->service_previous_price }}</span></h6>
                                <a href="{{ route('service-details', ['slug' => $service->service_slug ]) }}" class="btn btn-book">Book Now</a>
                            </div>
                        </div>
                    </div>
                @endif <!-- End of the condition -->

                        
               @endforeach

                     

            </div>
                </div>
                <div class="btn-sec aos" data-aos="fade-up">
                    <a href="{{ url('search') }}" class="btn btn-primary btn-view">View All<i
                            class="feather-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
    </section>
  

    <section class="providers-section">
        <!-- <div class="container">
            <div class="section-heading">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2>Top Providers</h2>
                        <p>Meet Our Experts</p>
                    </div>
                    <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                        <a href="{{ url('providers') }}" class="btn btn-primary btn-view">View All<i
                                class="feather-arrow-right-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="row  aos" data-aos="fade-up">
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset">
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
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset">
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
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i><span>(228)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset">
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
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i><span>(130)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset">
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
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i><span>(95)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>

    <!-- Work Section -->
    <section class="work-section pt-0">
        <div class="container">
            <div class="row  aos" data-aos="fade-up">
                <div class="col-md-12">
                    <div class="offer-paths">
                        <div class="offer-pathimg">
                            <img src="{{ URL::asset('/assets/img/offer.png') }}" alt="img">
                        </div>
                        <div class="offer-path-content">
                            <h3>We Are Offering 14 Days Free Trial</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore minim veniam, quis nostrud exercitation ullamco magna aliqua. </p>
                            <a href="{{ url('free-trial') }}" class="btn btn-primary btn-views">Try 14 Days Free Trial<i
                                    class="feather-arrow-right-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading aos" data-aos="fade-up">
                        <h2>How It Works</h2>
                        <p>Aliquam lorem ante, dapibus in, viverra quis</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="work-box aos" data-aos="fade-up">
                        <div class="work-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/work-icon.svg') }}" alt="img">
                            </span>
                        </div>
                        <h5>Choose What To Do</h5>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing tempor labore et dolore magna aliqua.</p>
                        <h4>01</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box aos" data-aos="fade-up">
                        <div class="work-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/find-icon.svg') }}" alt="img">
                            </span>
                        </div>
                        <h5>Find What You Want</h5>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing tempor labore et dolore magna aliqua.</p>
                        <h4>02</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box aos" data-aos="fade-up">
                        <div class="work-icon">
                            <span>
                                <img src="{{ URL::asset('/assets/img/icons/place-icon.svg') }}" alt="img">
                            </span>
                        </div>
                        <h5>Amazing Places</h5>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing tempor labore et dolore magna aliqua.</p>
                        <h4>03</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Work Section -->

    <!-- Service Section -->
    <section class="service-section">
        <div class="container">
            <div class="section-heading">
                <div class="row">
                    <div class="col-md-6 aos" data-aos="fade-up">
                        <h2>Most Popular Services</h2>
                        <p>Explore the greates our services. You won’t be disappointed</p>
                    </div>
                    <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                        <div class="owl-nav mynav1"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel popular-slider">

        @foreach($services as $service)

            @if($service->service_isPopular == 1) 

                     @php
                        $selectedImagesArray = json_decode($service->selected_images);
                    @endphp

                    @php
                        $category = $categories->where('id', $service->service_category)->first();
                    @endphp


                <div class="service-widget aos" data-aos="fade-up">
                    <div class="service-img">
                        <a href="{{ route('service-details', ['slug' => $service->service_slug ]) }}">
                            @if(isset($selectedImagesArray) && is_array($selectedImagesArray) && count($selectedImagesArray) > 0)
                                <img src="{{ asset('uploads/services/' . $selectedImagesArray[0]) }}" alt="Service Image">
                            @else
                                <img class="img-fluid serv-img" alt="Service Image" src="{{ asset('/assets/img/services/service-01.jpg') }}">
                            @endif
                        </a>
                        <div class="fav-item">
                            <a href="{{ route('index-categories', ['slug' => $category->category_slug]) }}"><span class="item-cat">{{ $category->category_name }}</span></a>
                            <a href="javascript:void(0)" class="fav-icon">
                                <i class="feather-heart"></i>
                            </a>
                        </div>
                        <div class="item-info">
                            <!-- <a href="{{ route('service-details', ['slug' => $service->service_slug ]) }}"><span class="item-img"><img src="{{ URL::asset('/assets/img/logo.png') }}" class="avatar" alt=""></span></a> -->
                        </div>
                    </div>
                    <div class="service-content">
                        <h3 class="title">
                            <a href="{{ route('service-details', ['slug' => $service->service_slug ]) }}">{{ $service->service_title }}</a>
                        </h3>
                        <p><i class="feather-map-pin"></i>Digital Market, UAE<span class="rate"><i class="fas fa-star filled"></i>4.9</span></p>
                        <div class="serv-info">
                            <h6>AED {{ $service->service_price }}<span class="old-price">AED {{ $service->service_previous_price }}</span></h6>
                            <a href="{{ route('service-details', ['slug' => $service->service_slug ]) }}" class="btn btn-book">Book Now</a>
                        </div>
                    </div>
                </div>
              @endif <!-- End of the condition -->

        @endforeach
                      

                    </div>
                </div>
                <div class="btn-sec aos" data-aos="fade-up">
                    <a href="{{ url('search') }}" class="btn btn-primary btn-view">View All<i
                            class="feather-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Section -->

    <!-- pricing Section -->
    <section class="service-section pricing-sections pt-0">
        <div class="container">
            <div class="section-heading">
                <div class="row">
                    <div class="col-md-12 text-center aos" data-aos="fade-up">
                        <h2>Pricing Plans</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>
            <div class="row aos" data-aos="fade-up">
                <div class="col-lg-4 col-sm-12">
                    <div class="pricing-popular">
                        <span class="btn w-100">Popular</span>
                    </div>
                    <div class="pricing-plans">
                        <div class="pricing-planshead">
                            <h4>Basic</h4>
                            <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                            <h6>$50<span>/month</span></h6>
                        </div>
                        <div class="pricing-planscontent">
                            <ul>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Sed perspiciatis unde omnis natus error</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Lorem dolor consecteturadipiscing elit</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Duis irure dolor reprehenderit voluptate</span>
                                </li>
                                <li class="inactive">
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Nemo enim ipsam voluptatem quia </span>
                                </li>
                                <li class="inactive">
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Sed perspiciatis iste natus error </span>
                                </li>
                                <li class="inactive">
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Lorem dolor consecteturadipiscing elit </span>
                                </li>
                            </ul>
                            <div class="pricing-btn">
                                <a href="{{ url('search') }}" class="btn btn-primary btn-view">Get Started<i
                                        class="feather-arrow-right-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="pricing-popular active">
                        <span class="btn w-100">Popular</span>
                    </div>
                    <div class="pricing-plans active">
                        <div class="pricing-planshead">
                            <h4>Standard</h4>
                            <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                            <h6>$100<span>/month</span></h6>
                        </div>
                        <div class="pricing-planscontent">
                            <ul>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Sed perspiciatis unde omnis natus error</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Lorem dolor consecteturadipiscing elit</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Duis irure dolor reprehenderit voluptate</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Nemo enim ipsam voluptatem quia </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Sed perspiciatis iste natus error </span>
                                </li>
                                <li class="inactive">
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Lorem dolor consecteturadipiscing elit </span>
                                </li>
                            </ul>
                            <div class="pricing-btn">
                                <a href="{{ url('search') }}" class="btn btn-primary btn-view">Get Started<i
                                        class="feather-arrow-right-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="pricing-popular ">
                        <span class="btn w-100">Popular</span>
                    </div>
                    <div class="pricing-plans ">
                        <div class="pricing-planshead">
                            <h4>Premium</h4>
                            <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                            <h6>$150<span>/month</span></h6>
                        </div>
                        <div class="pricing-planscontent">
                            <ul>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Sed perspiciatis unde omnis natus error</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Lorem dolor consecteturadipiscing elit</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Duis irure dolor reprehenderit voluptate</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Nemo enim ipsam voluptatem quia </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Sed perspiciatis iste natus error </span>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle me-2 text-primary"></i>
                                    <span>Lorem dolor consecteturadipiscing elit </span>
                                </li>
                            </ul>
                            <div class="pricing-btn">
                                <a href="{{ url('search') }}" class="btn btn-primary btn-view">Get Started<i
                                        class="feather-arrow-right-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /pricing Section -->

    <!-- Client Section -->
    <section class="client-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-heading aos" data-aos="fade-up">
                        <h2>What our client says</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur elit</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel testimonial-slider">

                        <div class="client-widget aos" data-aos="fade-up">
                            <div class="client-img">
                                <a href="javascript:;">
                                    <img class="img-fluid" alt="Image"
                                        src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}">
                                </a>
                            </div>
                            <div class="client-content">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi </p>
                                <h5>Sophie Moore</h5>
                                <h6>Director</h6>
                            </div>
                        </div>
                        <div class="client-widget aos" data-aos="fade-up">
                            <div class="client-img">
                                <a href="javascript:;">
                                    <img class="img-fluid" alt="Image"
                                        src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}">
                                </a>
                            </div>
                            <div class="client-content">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi </p>
                                <h5>Mike Hussy</h5>
                                <h6>Lead</h6>
                            </div>
                        </div>
                        <div class="client-widget aos" data-aos="fade-up">
                            <div class="client-img">
                                <a href="javascript:;">
                                    <img class="img-fluid" alt="Image"
                                        src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg') }}">
                                </a>
                            </div>
                            <div class="client-content">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi </p>
                                <h5>John Doe</h5>
                                <h6>CEO</h6>
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
                    <div class="section-heading">
                        <h2>Latest Blog</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur elit</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="blog flex-fill aos" data-aos="fade-up">
                        <div class="blog-image">
                            <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                    src="{{ URL::asset('/assets/img/blog/blog-01.jpg') }}" alt="Post Image"></a>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-item">
                                <li><i class="feather-calendar"></i>09 Aug 2023</li>
                                <li>
                                    <div class="post-author">
                                        <a href="javascript:;"><i class="feather-user"></i><span>Hal Lewis</span></a>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="blog-title">
                                <a href="{{ url('blog-details') }}">How to Choose a Electrical ServiceProvider?</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="blog flex-fill aos" data-aos="fade-up">
                        <div class="blog-image">
                            <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                    src="{{ URL::asset('/assets/img/blog/blog-02.jpg') }}" alt="Post Image"></a>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-item">
                                <li><i class="feather-calendar"></i>09 Aug 2023</li>
                                <li>
                                    <div class="post-author">
                                        <a href="javascript:;"><i class="feather-user"></i><span>JohnDoe</span></a>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="blog-title">
                                <a href="{{ url('blog-details') }}">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="blog flex-fill aos" data-aos="fade-up">
                        <div class="blog-image">
                            <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                    src="{{ URL::asset('/assets/img/blog/blog-03.jpg') }}" alt="Post Image"></a>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-item">
                                <li><i class="feather-calendar"></i>09 Aug 2023</li>
                                <li>
                                    <div class="post-author">
                                        <a href="javascript:;"><i class="feather-user"></i><span>Greg Avery</span></a>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="blog-title">
                                <a href="{{ url('blog-details') }}">Construction Service Scams: How to Avoid Them</a>
                            </h3>
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
                    <div class="section-heading">
                        <h2>Our Partners</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur elit</p>
                    </div>
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
    </section>
    <!-- Partners Section -->

    <!-- App Section -->
    <section class="app-section">
        <div class="container">
            <div class="app-sec">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="col-md-12">
                            <div class="heading aos" data-aos="fade-up">
                                <h2>Download Our App</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.</p>
                                <h6>Scan the QR code to get the app now</h6>
                                <div class="scan-img">
                                    <img src="{{ URL::asset('/assets/img/scan-img.png') }}" class="img-fluid"
                                        alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="downlaod-btn aos" data-aos="fade-up">
                            <a href="javascript:;" target="_blank">
                                <img src="{{ URL::asset('/assets/img/googleplay.svg') }}" alt="img">
                            </a>
                            <a href="javascript:;" target="_blank">
                                <img src="{{ URL::asset('/assets/img/appstore.svg') }}" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="appimg-set aos" data-aos="fade-up">
                            <img src="{{ URL::asset('/assets/img/app-img.png') }}" class="img-fluid" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        setTimeout(function () {
            var flashMessage = document.getElementById('flash-message');
            if (flashMessage) {
                flashMessage.style.display = 'none';
            }
        }, 5000); // Change '5000' to the duration you want (in milliseconds)


     
            function redirectToService() {
          
                var selectElement = document.getElementById('serviceSelect');
                var selectedOption = selectElement.options[selectElement.selectedIndex];
                console.log(selectedOption)
                var redirectUrl = selectedOption.value;
                if (redirectUrl) {
                    window.location.href = redirectUrl;
                }
            }


    </script>
    <!-- /App Section -->
    @component('components.model-popup')
    @endcomponent
    @component('components.scrollToTop')
    @endcomponent
@endsection
