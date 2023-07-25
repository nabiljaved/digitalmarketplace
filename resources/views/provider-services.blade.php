<?php $page = 'provider-services'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            @component('components.pageheader')
                @slot('title')
                    My Services
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-list">
                        <ul class="nav">
                            <li>
                                <a href="javascript:;" class="active" data-bs-toggle="tab" data-bs-target="#active-service">Actice
                                    Services</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-bs-toggle="tab" data-bs-target="#inactive-service">Inactive
                                    Services</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content pt-0">
                <div class="tab-pane active" id="active-service">
                    <div class="row">

                        <!-- Favorite Item -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget pro-service">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-04.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <div class="item-info">
                                            <a href="{{ url('categories') }}"><span class="item-cat">Car Wash</span></a>
                                        </div>
                                        <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">Car Repair Services</a>
                                    </h3>
                                    <div class="addrs-item">
                                        <p><i class="feather-map-pin"></i>Maryland City, MD, USA</p>
                                        <h6 class="price">$20.00<span class="old-price">$35.00</span><span
                                                class="price-hr">/hr</span></h6>
                                    </div>
                                    <div class="serv-info">
                                        <div>
                                            <a href="{{ url('provider-edit-service') }}" class="serv-edit"><i
                                                    class="feather-edit"></i> Edit</a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#in-active"><span><i class="feather-alert-circle"></i>
                                                    Active</span></a>
                                        </div>
                                        <a href="{{ url('provider-offers') }}" class="btn btn-book">Apply Offer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Favorite Item -->

                        <!-- Favorite Item -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget pro-service">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-02.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <div class="item-info">
                                            <a href="{{ url('categories') }}"><span class="item-cat">Construction</span></a>
                                        </div>
                                        <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">Toughened Glass Fitting Services</a>
                                    </h3>
                                    <div class="addrs-item">
                                        <p><i class="feather-map-pin"></i>New Jersey, USA</p>
                                        <h6 class="price">$20.00<span class="old-price">$35.00</span><span
                                                class="price-hr">/hr</span></h6>
                                    </div>
                                    <div class="serv-info">
                                        <div>
                                            <a href="{{ url('provider-edit-service') }}" class="serv-edit"><i
                                                    class="feather-edit"></i> Edit</a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#in-active"><span><i class="feather-alert-circle"></i>
                                                    Active</span></a>
                                        </div>
                                        <a href="{{ url('provider-offers') }}" class="btn btn-book">Apply Offer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Favorite Item -->

                        <!-- Favorite Item -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget pro-service">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-06.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <div class="item-info">
                                            <a href="{{ url('categories') }}"><span class="item-cat">Computer</span></a>
                                        </div>
                                        <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">Computer & Server AMC Service</a>
                                    </h3>
                                    <div class="addrs-item">
                                        <p><i class="feather-map-pin"></i>California, USA</p>
                                        <h6 class="price">$20.00<span class="old-price">$35.00</span><span
                                                class="price-hr">/hr</span></h6>
                                    </div>
                                    <div class="serv-info">
                                        <div>
                                            <a href="{{ url('provider-edit-service') }}" class="serv-edit"><i
                                                    class="feather-edit"></i> Edit</a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#in-active"><span><i class="feather-alert-circle"></i>
                                                    Active</span></a>
                                        </div>
                                        <a href="{{ url('provider-offers') }}" class="btn btn-book">Apply Offer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Favorite Item -->

                        <!-- Favorite Item -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget pro-service">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-07.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <div class="item-info">
                                            <a href="{{ url('categories') }}"><span class="item-cat">Interior</span></a>
                                        </div>
                                        <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">Interior Designing</a>
                                    </h3>
                                    <div class="addrs-item">
                                        <p><i class="feather-map-pin"></i>Maryland, USA<< /p>
                                                <h6 class="price">$21.00<span class="old-price">$31.00</span><span
                                                        class="price-hr">/hr</span></h6>
                                    </div>
                                    <div class="serv-info">
                                        <div>
                                            <a href="{{ url('provider-edit-service') }}" class="serv-edit"><i
                                                    class="feather-edit"></i> Edit</a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#in-active"><span><i class="feather-alert-circle"></i>
                                                    Active</span></a>
                                        </div>
                                        <a href="{{ url('provider-offers') }}" class="btn btn-book">Apply Offer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Favorite Item -->

                        <!-- Favorite Item -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget pro-service">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-08.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <div class="item-info">
                                            <a href="{{ url('categories') }}"><span class="item-cat">Car Wash</span></a>
                                        </div>
                                        <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">Steam Car Wash</a>
                                    </h3>
                                    <div class="addrs-item">
                                        <p><i class="feather-map-pin"></i>Montana, USA</p>
                                        <h6 class="price">$20.00<span class="old-price">$35.00</span><span
                                                class="price-hr">/hr</span></h6>
                                    </div>
                                    <div class="serv-info">
                                        <div>
                                            <a href="{{ url('provider-edit-service') }}" class="serv-edit"><i
                                                    class="feather-edit"></i> Edit</a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#in-active"><span><i class="feather-alert-circle"></i>
                                                    Active</span></a>
                                        </div>
                                        <a href="{{ url('provider-offers') }}" class="btn btn-book">Apply Offer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Favorite Item -->

                        <!-- Favorite Item -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget pro-service">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-01.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <div class="item-info">
                                            <a href="{{ url('categories') }}"><span
                                                    class="item-cat">Electrical</span></a>
                                        </div>
                                        <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">Electric Panel Repairing Service</a>
                                    </h3>
                                    <div class="addrs-item">
                                        <p><i class="feather-map-pin"></i>Maryland City, MD, USA</p>
                                        <h6 class="price">$20.00<span class="old-price">$35.00</span><span
                                                class="price-hr">/hr</span></h6>
                                    </div>
                                    <div class="serv-info">
                                        <div>
                                            <a href="{{ url('provider-edit-service') }}" class="serv-edit"><i
                                                    class="feather-edit"></i> Edit</a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#in-active"><span><i class="feather-alert-circle"></i>
                                                    Active</span></a>
                                        </div>
                                        <a href="{{ url('provider-offers') }}" class="btn btn-book">Apply Offer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Favorite Item -->

                        <!-- Favorite Item -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget pro-service">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-09.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <div class="item-info">
                                            <a href="{{ url('categories') }}"><span class="item-cat">Cleaning</span></a>
                                        </div>
                                        <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">House Cleaning Services</a>
                                    </h3>
                                    <div class="addrs-item">
                                        <p><i class="feather-map-pin"></i>Georgia</p>
                                        <h6 class="price">$23.00<span class="old-price">$32.00</span><span
                                                class="price-hr">/hr</span></h6>
                                    </div>
                                    <div class="serv-info">
                                        <div>
                                            <a href="{{ url('provider-edit-service') }}" class="serv-edit"><i
                                                    class="feather-edit"></i> Edit</a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#in-active"><span><i class="feather-alert-circle"></i>
                                                    Active</span></a>
                                        </div>
                                        <a href="{{ url('provider-offers') }}" class="btn btn-book">Apply Offer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Favorite Item -->

                        <!-- Favorite Item -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget pro-service">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-05.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <div class="item-info">
                                            <a href="{{ url('categories') }}"><span
                                                    class="item-cat">Construction</span></a>
                                        </div>
                                        <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">Commercial Painting Services</a>
                                    </h3>
                                    <div class="addrs-item">
                                        <p><i class="feather-map-pin"></i>Alabama, USA</p>
                                        <h6 class="price">$25.00<span class="old-price">$30.00</span><span
                                                class="price-hr">/hr</span></h6>
                                    </div>
                                    <div class="serv-info">
                                        <div>
                                            <a href="{{ url('provider-edit-service') }}" class="serv-edit"><i
                                                    class="feather-edit"></i> Edit</a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#in-active"><span><i class="feather-alert-circle"></i>
                                                    Active</span></a>
                                        </div>
                                        <a href="{{ url('provider-offers') }}" class="btn btn-book">Apply Offer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Favorite Item -->

                        <!-- Favorite Item -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget pro-service">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-10.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <div class="item-info">
                                            <a href="{{ url('categories') }}"><span
                                                    class="item-cat">Construction</span></a>
                                        </div>
                                        <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">Building Construction Services</a>
                                    </h3>
                                    <div class="addrs-item">
                                        <p><i class="feather-map-pin"></i>Montana, USA</p>
                                        <h6 class="price">$20.00<span class="old-price">$30.00</span><span
                                                class="price-hr">/hr</span></h6>
                                    </div>
                                    <div class="serv-info">
                                        <div>
                                            <a href="{{ url('provider-edit-service') }}" class="serv-edit"><i
                                                    class="feather-edit"></i> Edit</a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#in-active"><span><i class="feather-alert-circle"></i>
                                                    Active</span></a>
                                        </div>
                                        <a href="{{ url('provider-offers') }}" class="btn btn-book">Apply Offer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Favorite Item -->

                    </div>
                </div>

                <div class="tab-pane fade" id="inactive-service">
                    <div class="row">

                        <!-- Favorite Item -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget pro-service">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-02.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <div class="item-info">
                                            <a href="{{ url('categories') }}"><span
                                                    class="item-cat">Construction</span></a>
                                        </div>
                                        <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">Toughened Glass Fitting Services</a>
                                    </h3>
                                    <div class="addrs-item">
                                        <p><i class="feather-map-pin"></i>New Jersey, USA</p>
                                        <h6 class="price">$20.00<span class="old-price">$35.00</span><span
                                                class="price-hr">/hr</span></h6>
                                    </div>
                                    <div class="serv-info">
                                        <div>
                                            <a href="javascript:;" class="serv-edit" data-bs-toggle="modal"
                                                data-bs-target="#del-service"><i class="feather-trash-2"></i>Delete</a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#active"><span><i class="feather-alert-circle"></i>
                                                    Inactive</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Favorite Item -->

                        <!-- Favorite Item -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget pro-service">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-04.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <div class="item-info">
                                            <a href="{{ url('categories') }}"><span class="item-cat">Car Wash</span></a>
                                        </div>
                                        <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">Car Repair Services</a>
                                    </h3>
                                    <div class="addrs-item">
                                        <p><i class="feather-map-pin"></i>Maryland, USA</p>
                                        <h6 class="price">$20.00<span class="old-price">$35.00</span><span
                                                class="price-hr">/hr</span></h6>
                                    </div>
                                    <div class="serv-info">
                                        <div>
                                            <a href="javascript:;" class="serv-edit" data-bs-toggle="modal"
                                                data-bs-target="#del-service"><i class="feather-trash-2"></i>Delete</a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#active"><span><i class="feather-alert-circle"></i>
                                                    Inactive</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Favorite Item -->

                        <!-- Favorite Item -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget pro-service">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-07.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <div class="item-info">
                                            <a href="{{ url('categories') }}"><span class="item-cat">Interior</span></a>
                                        </div>
                                        <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">Interior Designing</a>
                                    </h3>
                                    <div class="addrs-item">
                                        <p><i class="feather-map-pin"></i>Maryland, USA</p>
                                        <h6 class="price">$23.00<span class="old-price">$34.00</span><span
                                                class="price-hr">/hr</span></h6>
                                    </div>
                                    <div class="serv-info">
                                        <div>
                                            <a href="javascript:;" class="serv-edit" data-bs-toggle="modal"
                                                data-bs-target="#del-service"><i class="feather-trash-2"></i>Delete</a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#active"><span><i class="feather-alert-circle"></i>
                                                    Inactive</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Favorite Item -->

                        <!-- Favorite Item -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget pro-service">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-06.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <div class="item-info">
                                            <a href="{{ url('categories') }}"><span class="item-cat">Computer</span></a>
                                        </div>
                                        <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">Computer & Server AMC Service</a>
                                    </h3>
                                    <div class="addrs-item">
                                        <p><i class="feather-map-pin"></i>California, USA</p>
                                        <h6 class="price">$22.00<span class="old-price">$32.00</span><span
                                                class="price-hr">/hr</span></h6>
                                    </div>
                                    <div class="serv-info">
                                        <div>
                                            <a href="javascript:;" class="serv-edit" data-bs-toggle="modal"
                                                data-bs-target="#del-service"><i class="feather-trash-2"></i>Delete</a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#active"><span><i class="feather-alert-circle"></i>
                                                    Inactive</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Favorite Item -->

                        <!-- Favorite Item -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget pro-service">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-01.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <div class="item-info">
                                            <a href="{{ url('categories') }}"><span
                                                    class="item-cat">Electrical</span></a>
                                        </div>
                                        <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">Electric Panel Repairing Service</a>
                                    </h3>
                                    <div class="addrs-item">
                                        <p><i class="feather-map-pin"></i>Texas, USA</p>
                                        <h6 class="price">$22.00<span class="old-price">$25.00</span><span
                                                class="price-hr">/hr</span></h6>
                                    </div>
                                    <div class="serv-info">
                                        <div>
                                            <a href="javascript:;" class="serv-edit" data-bs-toggle="modal"
                                                data-bs-target="#del-service"><i class="feather-trash-2"></i>Delete</a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#active"><span><i class="feather-alert-circle"></i>
                                                    Inactive</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Favorite Item -->

                        <!-- Favorite Item -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget pro-service">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-08.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <div class="item-info">
                                            <a href="{{ url('categories') }}"><span class="item-cat">Car Wash</span></a>
                                        </div>
                                        <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">Steam Car Wash</a>
                                    </h3>
                                    <div class="addrs-item">
                                        <p><i class="feather-map-pin"></i>Montana, USA</p>
                                        <h6 class="price">$20.00<span class="old-price">$30.00</span><span
                                                class="price-hr">/hr</span></h6>
                                    </div>
                                    <div class="serv-info">
                                        <div>
                                            <a href="javascript:;" class="serv-edit" data-bs-toggle="modal"
                                                data-bs-target="#del-service"><i class="feather-trash-2"></i>Delete</a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#active"><span><i class="feather-alert-circle"></i>
                                                    Inactive</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Favorite Item -->

                        <!-- Favorite Item -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget pro-service">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-05.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <div class="item-info">
                                            <a href="{{ url('categories') }}"><span
                                                    class="item-cat">Construction</span></a>
                                        </div>
                                        <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">Commercial Painting Services</a>
                                    </h3>
                                    <div class="addrs-item">
                                        <p><i class="feather-map-pin"></i>Alabama, USA</p>
                                        <h6 class="price">$22.00<span class="old-price">$32.00</span><span
                                                class="price-hr">/hr</span></h6>
                                    </div>
                                    <div class="serv-info">
                                        <div>
                                            <a href="javascript:;" class="serv-edit" data-bs-toggle="modal"
                                                data-bs-target="#del-service"><i class="feather-trash-2"></i>Delete</a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#active"><span><i class="feather-alert-circle"></i>
                                                    Inactive</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Favorite Item -->

                        <!-- Favorite Item -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget pro-service">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-09.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <div class="item-info">
                                            <a href="{{ url('categories') }}"><span class="item-cat">Cleaning</span></a>
                                        </div>
                                        <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">House Cleaning Services</a>
                                    </h3>
                                    <div class="addrs-item">
                                        <p><i class="feather-map-pin"></i>Georgia</p>
                                        <h6 class="price">$18.00<span class="old-price">$25.00</span><span
                                                class="price-hr">/hr</span></h6>
                                    </div>
                                    <div class="serv-info">
                                        <div>
                                            <a href="javascript:;" class="serv-edit" data-bs-toggle="modal"
                                                data-bs-target="#del-service"><i class="feather-trash-2"></i>Delete</a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#active"><span><i class="feather-alert-circle"></i>
                                                    Inactive</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Favorite Item -->

                        <!-- Favorite Item -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget pro-service">
                                <div class="service-img">
                                    <a href="{{ url('service-details') }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ URL::asset('/assets/img/services/service-10.jpg') }}">
                                    </a>
                                    <div class="fav-item">
                                        <div class="item-info">
                                            <a href="{{ url('categories') }}"><span
                                                    class="item-cat">Construction</span></a>
                                        </div>
                                        <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ url('service-details') }}">Building Construction Services</a>
                                    </h3>
                                    <div class="addrs-item">
                                        <p><i class="feather-map-pin"></i>Montana, USA</p>
                                        <h6 class="price">$25.00<span class="old-price">$30.00</span><span
                                                class="price-hr">/hr</span></h6>
                                    </div>
                                    <div class="serv-info">
                                        <div>
                                            <a href="javascript:;" class="serv-edit" data-bs-toggle="modal"
                                                data-bs-target="#del-service"><i class="feather-trash-2"></i>Delete</a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#active"><span><i class="feather-alert-circle"></i>
                                                    Inactive</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Favorite Item -->

                    </div>
                </div>

            </div>
            @component('components.pagination')
            @endcomponent
        </div>
    </div>
 
    @component('components.model-popup')
    @endcomponent
@endsection
