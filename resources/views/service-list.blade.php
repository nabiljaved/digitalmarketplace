<?php $page = 'service-list'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.backgroundimage')
    @endcomponent
    @component('components.breadcrumb')
        @slot('title')
            Services
        @endslot
        @slot('li_1')
            Home
        @endslot
        @slot('li_2')
            Service List
        @endslot
    @endcomponent

    <div class="content">
        <div class="container">

            <div class="row">

                @component('components.filter')
                @endcomponent

                <!-- Service -->
                <div class="col-lg-9 col-sm-12">
                    <div class="row sorting-div">
                        <div class="col-lg-4 col-sm-12 ">
                            <div class="count-search">
                                <h6>Found 6 Services</h6>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12 d-flex justify-content-end ">
                            <div class="sortbyset">
                                <div class="sorting-select">
                                    <select class="form-control select">
                                        <option>Price Low to High</option>
                                        <option>Price High to Low</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid-listview">
                                <ul>
                                    <li>
                                        <a href="{{ url('service-grid') }}">
                                            <i class="feather-grid"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('service-list') }}" class="active">
                                            <i class="feather-list"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Service List -->
                            <div class="service-list">
                                <div class="service-cont">
                                    <div class="service-cont-img">
                                        <a href="{{ url('service-details') }}">
                                            <img class="img-fluid serv-img" alt="Service Image"
                                                src="{{ URL::asset('/assets/img/services/service-04.jpg') }}">
                                        </a>
                                        <div class="fav-item">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="service-cont-info">
                                        <span class="item-cat">Car Wash</span>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">Car Repair Services</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i>Maryland City, MD, USA</p>
                                        <div class="service-pro-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}"
                                                alt="">
                                            <span><i class="fas fa-star filled"></i>4.9</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-action">
                                    <h6>$25.00<span class="old-price">$35.00</span></h6>
                                    <a href="{{ url('booking') }}" class="btn btn-secondary">Book Now</a>
                                </div>
                            </div>
                            <!-- /Service List -->

                            <!-- Service List -->
                            <div class="service-list">
                                <div class="service-cont">
                                    <div class="service-cont-img">
                                        <a href="{{ url('service-details') }}">
                                            <img class="img-fluid serv-img" alt="Service Image"
                                                src="{{ URL::asset('/assets/img/services/service-02.jpg') }}">
                                        </a>
                                        <div class="fav-item">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="service-cont-info">
                                        <span class="item-cat">Construction</span>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">Toughened Glass Fitting Services</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i>New Jersey, USA</p>
                                        <div class="service-pro-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                alt="">
                                            <span><i class="fas fa-star filled"></i>4.9</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-action">
                                    <h6>$30.00<span class="old-price">$35.00</span></h6>
                                    <a href="{{ url('booking') }}" class="btn btn-secondary">Book Now</a>
                                </div>
                            </div>
                            <!-- /Service List -->

                            <!-- Service List -->
                            <div class="service-list">
                                <div class="service-cont">
                                    <div class="service-cont-img">
                                        <a href="{{ url('service-details') }}">
                                            <img class="img-fluid serv-img" alt="Service Image"
                                                src="{{ URL::asset('/assets/img/services/service-06.jpg') }}">
                                        </a>
                                        <div class="fav-item">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="service-cont-info">
                                        <span class="item-cat">Computer</span>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">Computer & Server AMC Service</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i>California, USA</p>
                                        <div class="service-pro-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg') }}"
                                                alt="">
                                            <span><i class="fas fa-star filled"></i>4.9</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-action">
                                    <h6>$30.00<span class="old-price">$35.00</span></h6>
                                    <a href="{{ url('booking') }}" class="btn btn-secondary">Book Now</a>
                                </div>
                            </div>
                            <!-- /Service List -->

                            <!-- Service List -->
                            <div class="service-list">
                                <div class="service-cont">
                                    <div class="service-cont-img">
                                        <a href="{{ url('service-details') }}">
                                            <img class="img-fluid serv-img" alt="Service Image"
                                                src="{{ URL::asset('/assets/img/services/service-07.jpg') }}">
                                        </a>
                                        <div class="fav-item">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="service-cont-info">
                                        <span class="item-cat">Interior</span>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">Interior Designing</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i>Maryland, USA</p>
                                        <div class="service-pro-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-06.jpg') }}"
                                                alt="">
                                            <span><i class="fas fa-star filled"></i>4.9</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-action">
                                    <h6>$15.00<span class="old-price">$25.00</span></h6>
                                    <a href="{{ url('booking') }}" class="btn btn-secondary">Book Now</a>
                                </div>
                            </div>
                            <!-- /Service List -->

                            <!-- Service List -->
                            <div class="service-list">
                                <div class="service-cont">
                                    <div class="service-cont-img">
                                        <a href="{{ url('service-details') }}">
                                            <img class="img-fluid serv-img" alt="Service Image"
                                                src="{{ URL::asset('/assets/img/services/service-09.jpg') }}">
                                        </a>
                                        <div class="fav-item">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="service-cont-info">
                                        <span class="item-cat">Cleaning</span>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">House Cleaning Services</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i>Georgia</p>
                                        <div class="service-pro-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg') }}"
                                                alt="">
                                            <span><i class="fas fa-star filled"></i>4.9</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-action">
                                    <h6>$55.00<span class="old-price">$60.00</span></h6>
                                    <a href="{{ url('booking') }}" class="btn btn-secondary">Book Now</a>
                                </div>
                            </div>
                            <!-- /Service List -->

                            <!-- Service List -->
                            <div class="service-list">
                                <div class="service-cont">
                                    <div class="service-cont-img">
                                        <a href="{{ url('service-details') }}">
                                            <img class="img-fluid serv-img" alt="Service Image"
                                                src="{{ URL::asset('/assets/img/services/service-10.jpg') }}">
                                        </a>
                                        <div class="fav-item">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="service-cont-info">
                                        <span class="item-cat">Construction</span>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">Building Construction Services</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i>Montana, USA</p>
                                        <div class="service-pro-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg') }}"
                                                alt="">
                                            <span><i class="fas fa-star filled"></i>4.9</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-action">
                                    <h6>$45.00<span class="old-price">$50.00</span></h6>
                                    <a href="{{ url('booking') }}" class="btn btn-secondary">Book Now</a>
                                </div>
                            </div>
                            <!-- /Service List -->

                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="blog-pagination rev-page">
                                @component('components.pagination')
                                @endcomponent
                            </div>
                        </div>
                    </div>
                    <!-- /Pagination -->

                </div>
                <!-- /Service -->

            </div>
        </div>
    </div>
@endsection
