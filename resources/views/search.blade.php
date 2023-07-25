<?php $page = 'search'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.backgroundimage')
    @endcomponent
    @component('components.breadcrumb')
        @slot('title')
            Find a Professional
        @endslot
        @slot('li_1')
            Home
        @endslot
        @slot('li_2')
            Find a Professional
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
                                <h6>Found 11 Services On Search</h6>
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
                                        <a href="{{ url('search') }}" class="active">
                                            <i class="feather-grid"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('search-list') }}">
                                            <i class="feather-list"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                                        <a href="javascript:void(0)" class="fav-icon">
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
                                    <p><i class="feather-map-pin"></i>Maryland City, MD, USA<span class="rate"><i
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
                                        <a href="javascript:void(0)" class="fav-icon">
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
                                        <a href="javascript:void(0)" class="fav-icon">
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
                                        <a href="javascript:void(0)" class="fav-icon">
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
                                        <a href="javascript:void(0)" class="fav-icon">
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
                                        <a href="javascript:void(0)" class="fav-icon">
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
                                        <a href="javascript:void(0)" class="fav-icon">
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

                        <!-- Service List -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget servicecontent">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-11.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <a href="{{ url('categories') }}"><span class="item-cat">Plumbing</span></a>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="item-info">
                                        <a href="{{ url('providers') }}"><span class="item-img"><img
                                                    src="{{ URL::asset('/assets/img/profiles/avatar-07.jpg') }}"
                                                    class="avatar" alt=""></span></a>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">Plumbing Services</a>
                                    </h3>
                                    <p><i class="feather-map-pin"></i>Virginia, USA<span class="rate"><i
                                                class="fas fa-star filled"></i>4.9</span></p>
                                    <div class="serv-info">
                                        <h6>$15.00<span class="old-price">$45.00</span></h6>
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
                                            src="{{ URL::asset('/assets/img/services/service-03.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <a href="{{ url('categories') }}"><span class="item-cat">Carpentry</span></a>
                                        <a href="javascript:void(0)" class="fav-icon">
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
                                        <a href="{{ url('service-details') }}">Wooden Carpentry Work</a>
                                    </h3>
                                    <p><i class="feather-map-pin"></i>Alabama, USA<span class="rate"><i
                                                class="fas fa-star filled"></i>4.9</span></p>
                                    <div class="serv-info">
                                        <h6>$32.00<span class="old-price">$35.00</span></h6>
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
                                            src="{{ URL::asset('/assets/img/services/service-13.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <a href="{{ url('categories') }}"><span class="item-cat">Construction</span></a>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="item-info">
                                        <a href="{{ url('providers') }}"><span class="item-img"><img
                                                    src="{{ URL::asset('/assets/img/profiles/avatar-07.jpg') }}"
                                                    class="avatar" alt=""></span></a>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">Painting Services</a>
                                    </h3>
                                    <p><i class="feather-map-pin"></i>Virginia, USA</p>
                                    <div class="serv-info">
                                        <h6>$150.00</h6>
                                        <a href="{{ url('booking') }}" class="btn btn-book">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Service List -->

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
