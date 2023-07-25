<?php $page = 'customer-favourite'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">

                @component('components.customermenu')
                @endcomponent

                <div class="col-md-8 col-lg-9">

                    <!-- Sort -->
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="widget-title">
                                <h4>Favorites</h4>
                            </div>
                        </div>

                        <div class="col-sm-6 d-flex align-items-center justify-content-end">
                            <div class="review-sort me-2">
                                <p>Sort</p>
                                <select class="select">
                                    <option>A -> Z</option>
                                    <option>Most helful</option>
                                </select>
                            </div>
                            <div class="grid-listview">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/icons/filter-icon.svg') }}" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('customer-favourite') }}" class="active">
                                            <i class="feather-grid"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('customer-booking') }}">
                                            <i class="feather-list"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Sort -->

                    <div class="row">

                        <!-- Service List -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget servicecontent">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-04.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <a href="{{ url('categories') }}"><span class="item-cat">Car Wash</span></a>
                                        <a href="javascript:void(0)" class="fav-icon selected">
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
                                    <p><i class="feather-map-pin"></i>Maryland City, USA<span class="rate"><i
                                                class="fas fa-star filled"></i>4.9</span></p>
                                    <div class="serv-info">
                                        <h6>$50.00</h6>
                                        <a href="{{ url('booking') }}" class="btn btn-book">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Service List -->

                        <!-- Service List -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget servicecontent">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-02.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <a href="{{ url('categories') }}"><span class="item-cat">Construction</span></a>
                                        <a href="javascript:void(0)" class="fav-icon selected">
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
                                        <a href="{{ url('service-details') }}">Toughened Glass Fitting Services</a>
                                    </h3>
                                    <p><i class="feather-map-pin"></i>New Jersey, USA<span class="rate"><i
                                                class="fas fa-star filled"></i>4.9</span></p>
                                    <div class="serv-info">
                                        <h6>$25.00</h6>
                                        <a href="{{ url('booking') }}" class="btn btn-book">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Service List -->

                        <!-- Service List -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget servicecontent">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-06.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <a href="{{ url('categories') }}"><span class="item-cat">Computer</span></a>
                                        <a href="javascript:void(0)" class="fav-icon selected">
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
                                        <a href="{{ url('service-details') }}">Computer & Server AMC Service</a>
                                    </h3>
                                    <p><i class="feather-map-pin"></i>California, USA<span class="rate"><i
                                                class="fas fa-star filled"></i>4.9</span></p>
                                    <div class="serv-info">
                                        <h6>$20.00<span class="old-price">$35.00</span></h6>
                                        <a href="{{ url('booking') }}" class="btn btn-book">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Service List -->

                        <!-- Service List -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget servicecontent">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-07.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <a href="{{ url('categories') }}"><span class="item-cat">Interior</span></a>
                                        <a href="javascript:void(0)" class="fav-icon selected">
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
                                        <a href="{{ url('service-details') }}">Interior Designing</a>
                                    </h3>
                                    <p><i class="feather-map-pin"></i>Maryland, USA<span class="rate"><i
                                                class="fas fa-star filled"></i>4.9</span></p>
                                    <div class="serv-info">
                                        <h6>$5.00<span class="old-price">$25.00</span></h6>
                                        <a href="{{ url('booking') }}" class="btn btn-book">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Service List -->

                        <!-- Service List -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget servicecontent">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-08.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <a href="{{ url('categories') }}"><span class="item-cat">Car Wash</span></a>
                                        <a href="javascript:void(0)" class="fav-icon selected">
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
                                    <p><i class="feather-map-pin"></i>Montana, USA<span class="rate"><i
                                                class="fas fa-star filled"></i>4.9</span></p>
                                    <div class="serv-info">
                                        <h6>$14.00</h6>
                                        <a href="{{ url('booking') }}" class="btn btn-book">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Service List -->

                        <!-- Service List -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget servicecontent">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-01.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <a href="{{ url('categories') }}"><span class="item-cat">Electrical</span></a>
                                        <a href="javascript:void(0)" class="fav-icon selected">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="item-info">
                                        <a href="{{ url('providers') }}"><span class="item-img"><img
                                                    src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg') }}"
                                                    class="avatar" alt=""></span></a>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">Electric Panel Repairing Service</a>
                                    </h3>
                                    <p><i class="feather-map-pin"></i>Texas, USA<span class="rate"><i
                                                class="fas fa-star filled"></i>4.9</span></p>
                                    <div class="serv-info">
                                        <h6>$45</h6>
                                        <a href="{{ url('booking') }}" class="btn btn-book">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Service List -->

                        <!-- Service List -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget servicecontent">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-09.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <a href="{{ url('categories') }}"><span class="item-cat">Cleaning</span></a>
                                        <a href="javascript:void(0)" class="fav-icon selected">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="item-info">
                                        <a href="{{ url('providers') }}"><span class="item-img"><img
                                                    src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg') }}"
                                                    class="avatar" alt=""></span></a>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">House Cleaning Services</a>
                                    </h3>
                                    <p><i class="feather-map-pin"></i>Georgia<span class="rate"><i
                                                class="fas fa-star filled"></i>4.9</span></p>
                                    <div class="serv-info">
                                        <h6>$10.00</h6>
                                        <a href="{{ url('booking') }}" class="btn btn-book">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Service List -->

                        <!-- Service List -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget servicecontent">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-05.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <a href="{{ url('categories') }}"><span class="item-cat">Construction</span></a>
                                        <a href="javascript:void(0)" class="fav-icon selected">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="item-info">
                                        <a href="{{ url('providers') }}"><span class="item-img"><img
                                                    src="{{ URL::asset('/assets/img/profiles/avatar-06.jpg') }}"
                                                    class="avatar" alt=""></span></a>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">Commercial Painting Services</a>
                                    </h3>
                                    <p><i class="feather-map-pin"></i>Alabama, USA<span class="rate"><i
                                                class="fas fa-star filled"></i>4.9</span></p>
                                    <div class="serv-info">
                                        <h6>$10.00<span class="old-price">$15.00</span></h6>
                                        <a href="{{ url('booking') }}" class="btn btn-book">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Service List -->

                        <!-- Service List -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget servicecontent">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-10.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <a href="{{ url('categories') }}"><span class="item-cat">Construction</span></a>
                                        <a href="javascript:void(0)" class="fav-icon selected">
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
                                        <a href="{{ url('service-details') }}">Building Construction Services</a>
                                    </h3>
                                    <p><i class="feather-map-pin"></i>Montana, USA<span class="rate"><i
                                                class="fas fa-star filled"></i>4.9</span></p>
                                    <div class="serv-info">
                                        <h6>$75</h6>
                                        <a href="{{ url('booking') }}" class="btn btn-book">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Service List -->

                    </div>

                    @component('components.pagination')
                    @endcomponent

                </div>

            </div>

        </div>
    </div>
@endsection
