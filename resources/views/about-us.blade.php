<?php $page = 'about-us'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            About Us
        @endslot
        @slot('li_1')
            Home
        @endslot
        @slot('li_2')
            About Us
        @endslot
    @endcomponent

    <div class="content p-0">

        <!-- About -->
        <div class="about-sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <div class="about-exp">
                                <span>12+ years of experiences</span>
                            </div>
                            <div class="abt-img">
                                <img src="{{asset('/assets/company/digitalmarket.png') }}" class="img-fluid" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h6>ABOUT OUR COMPANY</h6>
                            <h2>Best place for Digital Market</h2>
                            <p>Welcome to Digital Market Place, your one-stop destination for high-quality digital marketing services. 
                                We are dedicated to helping businesses and individuals achieve their online marketing goals with innovative and 
                                effective strategies. Our team of experts is committed to providing exceptional services tailored to your unique needs.</p>
                            <p><h3>Expertise:</h3><br> 
                                Our skilled team comprises experienced professionals who stay 
                                ahead of the latest industry trends, ensuring that your digital 
                                marketing campaigns are cutting-edge and successful.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>We understand that each business is different. </li>
                                        <li>Our primary focus is on delivering tangible results. </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>We believe in open communication and complete transparency. </li>
                                        <li>stay ahead of the latest industry trends .</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /About -->

        <!-- Work Section -->
        <section class="work-section work-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-heading">
                            <h2>How It Works</h2>
                            <p>Embark on a journey of possibilities and make your dreams a reality.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="work-box">
                            <div class="work-icon">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/work-icon.svg') }}" alt="img">
                                </span>
                            </div>
                            <h5>Choose What To Do</h5>
                            <p>Discover the perfect match for your desires and aspirations.</p>
                            <h4>01</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-box">
                            <div class="work-icon">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/find-icon.svg') }}" alt="img">
                                </span>
                            </div>
                            <h5>Find What You Want</h5>
                            <p>Discover the perfect match for your desires and aspirations.</p>
                            <h4>02</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-box">
                            <div class="work-icon">
                                <span>
                                    <img src="{{ URL::asset('/assets/img/icons/place-icon.svg') }}" alt="img">
                                </span>
                            </div>
                            <h5>Amazing Places</h5>
                            <p>Uncover breathtaking destinations that will leave you in awe.</p>
                            <h4>03</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Work Section -->

        <!-- Choose Us Section -->
        <div class="chooseus-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="choose-content">
                            <h2>Why Choose Us</h2>
                            <p>With us, you can be confident in making the right choice for your digital marketing success. Experience the difference and elevate your online presence today!</p>
                            <div class="support-card">
                                <h4 class="support-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#aboutone"
                                        aria-expanded="false">24/7 Supports</a>
                                </h4>
                                <div id="aboutone" class="card-collapse collapse">
                                    <p>Our dedicated team is available round-the-clock to assist you, ensuring seamless communication and timely solutions for all your queries and concerns.</p>
                                </div>
                            </div>
                            <div class="support-card">
                                <h4 class="support-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#abouttwo"
                                        aria-expanded="false">Client’s reviews</a>
                                </h4>
                                <div id="abouttwo" class="card-collapse collapse">
                                    <p>Our experienced and skilled professionals bring a wealth of expertise to the table, crafting tailored strategies to meet your unique needs and achieve remarkable outcomes.</p>
                                </div>
                            </div>
                            <div class="support-card">
                                <h4 class="support-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#about3"
                                        aria-expanded="false">Professional Team</a>
                                </h4>
                                <div id="about3" class="card-collapse collapse">
                                    <p>We take pride in offering the best-in-class services that align with the latest industry practices, ensuring that your business stays ahead of the competition and achieves sustainable growth.</p>
                                </div>
                            </div>
                            <div class="support-card">
                                <h4 class="support-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#about4" aria-expanded="false">Best
                                        Services</a>
                                </h4>
                                <div id="about4" class="card-collapse collapse">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                        architecto beatae vitae dicta sunt explicabo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="chooseus-img">
                            <img src="{{ URL::asset('/assets/img/marketing-services.jpeg') }}" class="img-fluid" alt="img" style="height:100%">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="choose-icon">
                            <img src="{{ URL::asset('/assets/img/icons/choose-icon.svg') }}" class="img-fluid"
                                alt="img">
                            <div class="choose-info">
                                <h5>2583+</h5>
                                <p>Satisfied Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="choose-icon">
                            <img src="{{ URL::asset('/assets/img/icons/choose-icon-01.svg') }}" class="img-fluid"
                                alt="img">
                            <div class="choose-info">
                                <h5>2383+</h5>
                                <p>Expert Team</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="choose-icon">
                            <img src="{{ URL::asset('/assets/img/icons/choose-icon.png') }}" class="img-fluid"
                                alt="img">
                            <div class="choose-info">
                                <h5>2129+</h5>
                                <p>Project Completed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="choose-icon border-0">
                            <img src="{{ URL::asset('/assets/img/icons/choose-icon-03.svg') }}" class="img-fluid"
                                alt="img">
                            <div class="choose-info">
                                <h5>30+</h5>
                                <p>Years of experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Choose Us Section -->

        <!-- Providers Section -->
        <!-- <section class="providers-section abt-provider">
            <div class="container">
                <div class="section-heading">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Top Providers</h2>
                            <p>Meet Our Experts</p>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <a href="{{ url('providers') }}" class="btn btn-primary btn-view">View All<i
                                    class="feather-arrow-right-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
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
                                        <h4><a href="{{ url('provider-details') }}">Michael</a><i
                                                class="fa fa-check-circle" aria-hidden="true"></i></h4>
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
                                        <h4><a href="{{ url('provider-details') }}">Thompson</a><i
                                                class="fa fa-check-circle" aria-hidden="true"></i></h4>
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
            </div>
        </section> -->
        <!-- /Providers Section -->

        <!-- Client Section -->
        <section class="client-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-heading">
                            <h2>What our client says</h2>
                            <p>"Digital Market Place has been an invaluable partner for our business. Their strategic approach to digital marketing has 
                                significantly increased our online visibility and brought us a steady flow of leads. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel testimonial-slider">

                        @foreach ($testimonials as $testimonial)
<div class="client-widget">
    <div class="client-img">
        <a href="javascript:;">
            <img class="img-fluid" alt="Image" src="{{ asset('uploads/testimonial/' . $testimonial->imgurl) }}">
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
        <p>{{ $testimonial['testimony'] }}</p>
        <h5>{{ $testimonial['name'] }}</h5>
        <h6>{{ $testimonial['designation'] }}</h6>
    </div>
</div>
@endforeach

                           

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Client Section -->

        <!-- Service Section -->
        <div class="service-offer">
            <div class="container">
                <div class="col-md-12">
                    <div class="offer-paths about-offer">
                        <div class="offer-path-content">
                            <h3>Looking for the Best Digital Marketing Service</h3>
                            <p>Welcome to the world of possibilities with our Best Digital Marketing Service! We take 
                                pride in being a trailblazer in the 
                                realm of digital marketing, providing you with unparalleled solutions to elevate 
                                your online presence and boost your business growth.</p>
                            <a href="{{ url('service-grid') }}" class="btn btn-primary btn-views">Get Started<i
                                    class="feather-arrow-right-circle"></i></a>
                        </div>
                        <div class="offer-pathimg">
                            <img src="{{ URL::asset('/assets/img/offer-path.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Service Section -->
    </div>
@endsection
