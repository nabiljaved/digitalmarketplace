<?php $page = 'service-details'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.backgroundimage')
    @endcomponent
    @component('components.breadcrumb')
        @slot('title')
            Service Details
        @endslot
        @slot('li_1')
            Home
        @endslot
        @slot('li_2')
            Service Details
        @endslot
    @endcomponent

<style>
    .service-images.small-gallery {
        display: flex;
        flex-wrap: wrap;
        gap: 10px; /* This sets the space between the images */
    }

    .service-images.small-gallery img {
        max-width: 100%;
    }

    
</style>

    <div class="content">
        <div class="container">
            <div class="row">

                <!-- Service Profile -->
                <div class="col-md-8">
                    <div class="serv-profile">
                        <h2>{{$service->service_title}}</h2>
                        <!-- <ul>
                            <li>
                                <span class="badge">Car Wash</span>
                            </li>
                            <li class="service-map"><i class="feather-map-pin"></i> Alabama, USA</li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="serv-action">
                        <ul>
                            <li>
                                <a href="javascript:;"><i class="feather-heart"></i></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-bs-toggle="tooltip" title="Share"><i
                                        class="feather-share-2"></i></a>
                            </li>
                            <li>
                                <a href="javascript:;"><i class="feather-printer"></i></a>
                            </li>
                            <li>
                                <a href="javascript:;"><i class="feather-download"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12">
                <div class="service-gal">
                    <div class="row gx-2">
                        <div class="col-md-9">
                            <div class="service-images big-gallery">
                                <img src="{{ asset('uploads/services/' . $selectedImagesArray[0]) }}" class="img-fluid" alt="img">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="service-images small-gallery" >
                                @foreach ($selectedImagesArrayAfterFirst as $image)
                                    <a href="{{ asset('uploads/services/' . $image) }}" data-fancybox="gallery">
                                        <img src="{{ asset('uploads/services/' . $image) }}" class="img-fluid" alt="img">
                                        <span class="circle-icon"><i class="feather-plus"></i></span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

              
                <!-- /Service Profile -->
            </div>

            <div class="row">

                <!-- Service Details -->
                <div class="col-lg-8">
                    <div class="service-wrap">
                        <h5>Service Details</h5>
                        <p>{{$service->service_detail}}</p>
                    </div>
                    <!-- <div class="service-wrap provide-service">
                        <h5>Service Provider</h5>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="provide-box">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}" class="img-fluid"
                                        alt="img">
                                    <div class="provide-info">
                                        <h6>Member Since</h6>
                                        <div class="serv-review"><i class="fa-solid fa-star"></i> <span>4.9 </span>(255
                                            reviews)</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="provide-box">
                                    <span><i class="feather-user"></i></span>
                                    <div class="provide-info">
                                        <h6>Member Since</h6>
                                        <p>Apr 2020</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="provide-box">
                                    <span><i class="feather-map-pin"></i></span>
                                    <div class="provide-info">
                                        <h6>Address</h6>
                                        <p>Hanover, Maryland</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="provide-box">
                                    <span><i class="feather-mail"></i></span>
                                    <div class="provide-info">
                                        <h6>Email</h6>
                                        <p>thomash@example.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="provide-box">
                                    <span><i class="feather-phone"></i></span>
                                    <div class="provide-info">
                                        <h6>Phone</h6>
                                        <p>+1 888 888 8888</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="social-icon provide-social">
                                    <ul>
                                        <li>
                                            <a href="javascript:;" target="_blank"><i class="feather-instagram"></i> </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" target="_blank"><i class="feather-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" target="_blank"><i class="feather-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" target="_blank"><i class="feather-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="service-wrap">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Gallery</h5>
                            </div>
                            <div class="col-md-6 text-md-end">
                                <div class="owl-nav mynav3"></div>
                            </div>
                        </div>
                        <div class="owl-carousel gallery-slider">
                            @foreach ($selectedImagesArray as $image)
                                <div class="gallery-widget" >
                                    <a href="{{ asset('uploads/services/' . $image) }}" data-fancybox="gallery">
                                        <img class="img-fluid" alt="Image" src="{{ asset('uploads/services/' . $image) }}" style="height:10rem">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="service-wrap">
                        <h5>Video</h5>
                        <div>
                            <iframe width="100%" height="500" src="https://www.youtube.com/embed/{{ getYoutubeVideoId($service->service_url) }}"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- <div class="service-wrap">
                        <h5>Reviews</h5>
                        <ul>
                            <li class="review-box">
                                <div class="review-profile">
                                    <div class="review-img">
                                        <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                            class="img-fluid" alt="img">
                                        <div class="review-name">
                                            <h6>Dennis</h6>
                                            <p>a week ago</p>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipicing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqa. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                                <div class="recommend-item">
                                    <a href="javascript:;"><img alt="Image"
                                            src="{{ URL::asset('/assets/img/icons/reply-icon.svg') }}" class="me-2">
                                        Reply</a>
                                    <div class="recommend-info">
                                        <p>Recommend?</p>
                                        <a href="javascript:;"><i class="feather-thumbs-up"></i> Yes</a>
                                        <a href="javascript:;"><i class="feather-thumbs-down"></i> No</a>
                                    </div>
                                </div>
                            </li>
                            <li class="review-box">
                                <div class="review-profile">
                                    <div class="review-img">
                                        <img src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg') }}"
                                            class="img-fluid" alt="img">
                                        <div class="review-name">
                                            <h6>Jaime</h6>
                                            <p>yesterday | 10:35AM </p>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipicing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqa. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                                <div class="recommend-item">
                                    <a href="javascript:;"><img alt="Image"
                                            src="{{ URL::asset('/assets/img/icons/reply-icon.svg') }}" class="me-2">
                                        Reply</a>
                                    <div class="recommend-info">
                                        <p>Recommend?</p>
                                        <a href="javascript:;"><i class="feather-thumbs-up"></i> Yes</a>
                                        <a href="javascript:;"><i class="feather-thumbs-down"></i> No</a>
                                    </div>
                                </div>
                            </li>
                            <li class="review-box">
                                <div class="review-profile">
                                    <div class="review-img">
                                        <img src="{{ URL::asset('/assets/img/profiles/avatar-07.jpg') }}"
                                            class="img-fluid" alt="img">
                                        <div class="review-name">
                                            <h6>Martinez</h6>
                                            <p>2 days ago | 14:35PM </p>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipicing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqa. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                                <div class="recommend-item">
                                    <a href="javascript:;"><img alt="Image"
                                            src="{{ URL::asset('/assets/img/icons/reply-icon.svg') }}" class="me-2">
                                        Reply</a>
                                    <div class="recommend-info">
                                        <p>Recommend?</p>
                                        <a href="javascript:;"><i class="feather-thumbs-up"></i> Yes</a>
                                        <a href="javascript:;"><i class="feather-thumbs-down"></i> No</a>
                                    </div>
                                </div>
                                <div class="reply-area">
                                    <textarea class="form-control mb-0" rows="3" placeholder="Type your response....."></textarea>
                                </div>
                            </li>
                            <li class="review-box">
                                <div class="review-profile">
                                    <div class="review-img">
                                        <img src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg') }}"
                                            class="img-fluid" alt="img">
                                        <div class="review-name">
                                            <h6>Bradley</h6>
                                            <p>1 month ago | 17:35PM </p>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipicing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqa. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                                <div class="recommend-item">
                                    <a href="javascript:;"><img alt="Image"
                                            src="{{ URL::asset('/assets/img/icons/reply-icon.svg') }}" class="me-2">
                                        Reply</a>
                                    <div class="recommend-info">
                                        <p>Recommend?</p>
                                        <a href="javascript:;"><i class="feather-thumbs-up"></i> Yes</a>
                                        <a href="javascript:;"><i class="feather-thumbs-down"></i> No</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="text-center">
                            <a href="{{ url('customer-reviews') }}" class="btn btn-primary btn-review">View All
                                Reviews</a>
                        </div>
                    </div> -->

                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="service-wrap">
                                <h5>Related Services</h5>
                            </div>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <div class="owl-nav mynav"></div>
                        </div>
                    </div>
                    <div class="owl-carousel related-slider">
    @foreach ($otherServices as $otherService)
        @php
            $image = json_decode($otherService->selected_images);
            $categoryId = (int)$otherService->service_category;
            $category = collect($categories)->firstWhere('id', $categoryId);
        @endphp

        <div class="service-widget mb-0">
            <div class="service-img">
                <a href="{{ url('service-details', $otherService->service_slug) }}">
                    <img class="img-fluid serv-img" alt="Service Image" src="{{ asset('uploads/services/' . $image[0]) }}">                           
                </a>
                <div class="fav-item">
                    @if ($category)
                        <a href="{{ url('service-details', $otherService->service_slug) }}"><span class="item-cat">{{ $category['category_name'] }}</span></a>
                    @endif
                    <a href="javascript:void(0)" class="fav-icon">
                        <i class="feather-heart"></i>
                    </a>
                </div>
                <div class="item-info">
                    <a href="{{ url('providers') }}"><span class="item-img"><img src="{{ asset('assets/img/company/logo.png') }}" class="avatar" alt=""></span></a>
                </div>
            </div>
            <div class="service-content">
                <h3 class="title">
                    <a href="{{ url('service-details', $otherService->service_slug) }}">{{ $otherService->service_title }}</a>
                </h3>
                <p><i class="feather-map-pin"></i>Oracle Digtial , UAE<span class="rate"><i class="fas fa-star filled"></i>4.9</span></p>
                <div class="serv-info">
                    <h6>AED {{ $otherService->service_price }}<span class="old-price">AED {{ $otherService->service_previous_price }}</span></h6>
                    <a href="{{ url('booking') }}" class="btn btn-book">Book Now</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

                </div>
                <!-- /Service Details -->

                <div class="col-lg-4 theiaStickySidebar">

                    <!-- Service Availability -->
                    <div class="card card-provide mb-0">
                        <div class="card-body">
                            <div class="provide-widget">
                                <div class="service-amount">
                                    <h5>AED  {{ $service->service_price }}<span>{{ $service->service_previous_price }}</span></h5>
                                    <p class="serv-review"><i class="fa-solid fa-star"></i> <span>4.9 </span>(255 reviews)
                                    </p>
                                </div>
                                <div class="serv-proimg">
                                    <img src="{{ asset('assets/img/company/logo.png')}}" class="img-fluid"
                                        alt="img">
                                    <span><i class="fa-solid fa-circle-check"></i></span>
                                </div>
                            </div>
                            <div class="package-widget">
                                <h5>Available Service Packages</h5>
                                <ul>
                                    <li>Full car wash and clean</li>
                                    <li>Auto Electrical</li>
                                    <li>Pre Purchase Inspection</li>
                                    <li>Pre Purchase Inspection</li>
                                </ul>
                            </div>
                            <!-- <div class="package-widget pack-service">
                                <h5>Additional Service</h5>
                                <ul>
                                    <li>
                                        <div class="add-serving">
                                            <label class="custom_check">
                                                <input type="checkbox" name="rememberme">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="add-serv-item">
                                                <div class="add-serv-img">
                                                    <img src="{{ URL::asset('/assets/img/services/service-09.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="add-serv-info">
                                                    <h6>House Cleaning</h6>
                                                    <p><i class="feather-map-pin"></i> Alabama, USA</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-serv-amt">
                                            <h6>$500.75</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="add-serving">
                                            <label class="custom_check">
                                                <input type="checkbox" name="rememberme">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="add-serv-item">
                                                <div class="add-serv-img">
                                                    <img src="{{ URL::asset('/assets/img/services/service-16.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="add-serv-info">
                                                    <h6>Air Conditioner Service</h6>
                                                    <p><i class="feather-map-pin"></i> Illinois, USA</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-serv-amt">
                                            <h6>$500.75</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="add-serving">
                                            <label class="custom_check">
                                                <input type="checkbox" name="rememberme">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="add-serv-item">
                                                <div class="add-serv-img">
                                                    <img src="{{ URL::asset('/assets/img/services/service-07.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="add-serv-info">
                                                    <h6>Interior Designing</h6>
                                                    <p><i class="feather-map-pin"></i> California, USA</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-serv-amt">
                                            <h6>$500.75</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="add-serving">
                                            <label class="custom_check">
                                                <input type="checkbox" name="rememberme">
                                                <span class="checkmark"></span>
                                            </label>
                                            <div class="add-serv-item">
                                                <div class="add-serv-img">
                                                    <img src="{{ URL::asset('/assets/img/services/service-03.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="add-serv-info">
                                                    <h6>Wooden Carpentry Work</h6>
                                                    <p><i class="feather-map-pin"></i> Alabama, USA</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-serv-amt">
                                            <h6>$354.45</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="card card-available">
                                <div class="card-body">
                                    <div class="available-widget">
                                        <div class="available-info">
                                            <h5>Service Availability</h5>
                                            <ul>
                                                <li>Monday <span>9:00 AM - 6:00 PM</span> </li>
                                                <li>Tuesday <span>9:00 AM - 6:00 PM</span> </li>
                                                <li>Wednesday <span>9:00 AM - 6:00 PM</span> </li>
                                                <li>Thursday <span>9:00 AM - 6:00 PM</span> </li>
                                                <li>Friday <span>9:00 AM - 6:00 PM</span> </li>
                                                <li>Saturday <span class="text-danger">Closed</span> </li>
                                                <li>Sunday <span class="text-danger">Closed</span> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="map-grid">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.720447201785!2d55.35109507491926!3d25.27998782834328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5dbd4d43ef29%3A0x3a40a28f1e59ccf7!2sOracle%20Digital%20%7CSocial%20Media%20marketing%20and%20Digital%20Marketing%20Dubai%20%7C%20Website%20Development%7C%20Social%20Media%20%7C%20E-Commerce%20Website!5e0!3m2!1sen!2sae!4v1690791985842!5m2!1sen!2sae" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <a href="{{ route('booking-payment',['slug' => $service->service_slug ]) }}" class="btn btn-primary">Book Service</a>
                        </div>
                    </div>


                    <!-- /Service Availability -->

                </div>

            </div>
        </div>
    </div>

        @php
            function getYoutubeVideoId($url) {
                $parsedUrl = parse_url($url);
                parse_str($parsedUrl['query'], $queryParams);
                if (isset($queryParams['v'])) {
                    return $queryParams['v'];
                }
                return null;
            }
    @endphp

@endsection
