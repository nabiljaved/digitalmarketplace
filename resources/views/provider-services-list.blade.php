<?php $page = 'provider-services-list'; ?>
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
                        <div class="col-md-12">

                            <!-- Favorite Item -->
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
                                        <div class="category-rating">
                                            <span class="item-cat">Car Wash</span>
                                            <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">Car Repair Services</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i>Maryland City, MD, USA</p>
                                    </div>
                                </div>
                                <div class="service-action">
                                    <ul>
                                        <li>
                                            <a href="{{ url('provider-edit-service') }}"><i
                                                    class="feather-edit"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#in-active"><i
                                                    class="feather-alert-circle"></i>Inactive</a>
                                        </li>
                                    </ul>
                                    <a href="{{ url('booking') }}" class="btn btn-secondary">Apply Offer</a>
                                </div>
                            </div>
                            <!-- /Favorite Item -->

                            <!-- Favorite Item -->
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
                                        <div class="category-rating">
                                            <span class="item-cat">Construction</span>
                                            <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">Toughened Glass Fitting Services</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i>New Jersey, USA</p>
                                    </div>
                                </div>
                                <div class="service-action">
                                    <ul>
                                        <li>
                                            <a href="{{ url('provider-edit-service') }}"><i
                                                    class="feather-edit"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#in-active"><i
                                                    class="feather-alert-circle"></i>Inactive</a>
                                        </li>
                                    </ul>
                                    <a href="{{ url('booking') }}" class="btn btn-secondary">Apply Offer</a>
                                </div>
                            </div>
                            <!-- /Favorite Item -->

                            <!-- Favorite Item -->
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
                                        <div class="category-rating">
                                            <span class="item-cat">Computer</span>
                                            <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">Computer & Server AMC Service</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i>California, USA</p>
                                    </div>
                                </div>
                                <div class="service-action">
                                    <ul>
                                        <li>
                                            <a href="{{ url('provider-edit-service') }}"><i
                                                    class="feather-edit"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#in-active"><i
                                                    class="feather-alert-circle"></i>Inactive</a>
                                        </li>
                                    </ul>
                                    <a href="{{ url('booking') }}" class="btn btn-secondary">Apply Offer</a>
                                </div>
                            </div>
                            <!-- /Favorite Item -->

                            <!-- Favorite Item -->
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
                                        <div class="category-rating">
                                            <span class="item-cat">Interior</span>
                                            <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">Interior Designing</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i>Maryland, USA</p>
                                    </div>
                                </div>
                                <div class="service-action">
                                    <ul>
                                        <li>
                                            <a href="{{ url('provider-edit-service') }}"><i
                                                    class="feather-edit"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#in-active"><i
                                                    class="feather-alert-circle"></i>Inactive</a>
                                        </li>
                                    </ul>
                                    <a href="{{ url('booking') }}" class="btn btn-secondary">Apply Offer</a>
                                </div>
                            </div>
                            <!-- /Favorite Item -->

                            <!-- Favorite Item -->
                            <div class="service-list">
                                <div class="service-cont">
                                    <div class="service-cont-img">
                                        <a href="{{ url('service-details') }}">
                                            <img class="img-fluid serv-img" alt="Service Image"
                                                src="{{ URL::asset('/assets/img/services/service-01.jpg') }}">
                                        </a>
                                        <div class="fav-item">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="service-cont-info">
                                        <div class="category-rating">
                                            <span class="item-cat">Electrician</span>
                                            <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">Electric Panel Repairing Service</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i>Texas, USA</p>
                                    </div>
                                </div>
                                <div class="service-action">
                                    <ul>
                                        <li>
                                            <a href="{{ url('provider-edit-service') }}"><i
                                                    class="feather-edit"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#in-active"><i
                                                    class="feather-alert-circle"></i>Inactive</a>
                                        </li>
                                    </ul>
                                    <a href="{{ url('booking') }}" class="btn btn-secondary">Apply Offer</a>
                                </div>
                            </div>
                            <!-- /Favorite Item -->

                            <!-- Favorite Item -->
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
                                        <div class="category-rating">
                                            <span class="item-cat">Cleaning</span>
                                            <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">House Cleaning Services</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i>Georgia</p>
                                    </div>
                                </div>
                                <div class="service-action">
                                    <ul>
                                        <li>
                                            <a href="{{ url('provider-edit-service') }}"><i
                                                    class="feather-edit"></i>Edit</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#in-active"><i
                                                    class="feather-alert-circle"></i>Inactive</a>
                                        </li>
                                    </ul>
                                    <a href="{{ url('booking') }}" class="btn btn-secondary">Apply Offer</a>
                                </div>
                            </div>
                            <!-- /Favorite Item -->

                        </div>

                    </div>
                </div>

                <div class="tab-pane fade" id="inactive-service">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Favorite Item -->
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
                                        <div class="category-rating">
                                            <span class="item-cat">Car Wash</span>
                                            <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">Car Repair Services</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i>Maryland City, MD, USA</p>
                                    </div>
                                </div>
                                <div class="service-action">
                                    <ul>
                                        <li>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#del-service"><i
                                                    class="feather-trash-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#active"><i
                                                    class="feather-alert-circle"></i>Active</a>
                                        </li>
                                    </ul>
                                    <a href="{{ url('booking') }}" class="btn btn-secondary">Apply Offer</a>
                                </div>
                            </div>
                            <!-- /Favorite Item -->

                            <!-- Favorite Item -->
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
                                        <div class="category-rating">
                                            <span class="item-cat">Construction</span>
                                            <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">Toughened Glass Fitting Services</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i>New Jersey, USA</p>
                                    </div>
                                </div>
                                <div class="service-action">
                                    <ul>
                                        <li>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#del-service"><i
                                                    class="feather-trash-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#active"><i
                                                    class="feather-alert-circle"></i>Active</a>
                                        </li>
                                    </ul>
                                    <a href="{{ url('booking') }}" class="btn btn-secondary">Apply Offer</a>
                                </div>
                            </div>
                            <!-- /Favorite Item -->

                            <!-- Favorite Item -->
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
                                        <div class="category-rating">
                                            <span class="item-cat">Computer</span>
                                            <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">Computer & Server AMC Service</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i>California, USA</p>
                                    </div>
                                </div>
                                <div class="service-action">
                                    <ul>
                                        <li>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#del-service"><i
                                                    class="feather-trash-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#active"><i
                                                    class="feather-alert-circle"></i>Active</a>
                                        </li>
                                    </ul>
                                    <a href="{{ url('booking') }}" class="btn btn-secondary">Apply Offer</a>
                                </div>
                            </div>
                            <!-- /Favorite Item -->

                            <!-- Favorite Item -->
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
                                        <div class="category-rating">
                                            <span class="item-cat">Interior</span>
                                            <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">Interior Designing</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i>Maryland, USA</p>
                                    </div>
                                </div>
                                <div class="service-action">
                                    <ul>
                                        <li>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#del-service"><i
                                                    class="feather-trash-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#active"><i
                                                    class="feather-alert-circle"></i>Active</a>
                                        </li>
                                    </ul>
                                    <a href="{{ url('booking') }}" class="btn btn-secondary">Apply Offer</a>
                                </div>
                            </div>
                            <!-- /Favorite Item -->

                            <!-- Favorite Item -->
                            <div class="service-list">
                                <div class="service-cont">
                                    <div class="service-cont-img">
                                        <a href="{{ url('service-details') }}">
                                            <img class="img-fluid serv-img" alt="Service Image"
                                                src="{{ URL::asset('/assets/img/services/service-01.jpg') }}">
                                        </a>
                                        <div class="fav-item">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="service-cont-info">
                                        <div class="category-rating">
                                            <span class="item-cat">Electrician</span>
                                            <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">Electric Panel Repairing Service</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i>Texas, USA</p>
                                    </div>
                                </div>
                                <div class="service-action">
                                    <ul>
                                        <li>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#del-service"><i
                                                    class="feather-trash-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#active"><i
                                                    class="feather-alert-circle"></i>Active</a>
                                        </li>
                                    </ul>
                                    <a href="{{ url('booking') }}" class="btn btn-secondary">Apply Offer</a>
                                </div>
                            </div>
                            <!-- /Favorite Item -->

                            <!-- Favorite Item -->
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
                                        <div class="category-rating">
                                            <span class="item-cat">Cleaning</span>
                                            <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                        </div>
                                        <h3 class="title">
                                            <a href="{{ url('service-details') }}">House Cleaning Services</a>
                                        </h3>
                                        <p><i class="feather-map-pin"></i>Georgia</p>
                                    </div>
                                </div>
                                <div class="service-action">
                                    <ul>
                                        <li>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#del-service"><i
                                                    class="feather-trash-2"></i>Delete</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#active"><i
                                                    class="feather-alert-circle"></i>Active</a>
                                        </li>
                                    </ul>
                                    <a href="{{ url('booking') }}" class="btn btn-secondary">Apply Offer</a>
                                </div>
                            </div>
                            <!-- /Favorite Item -->

                        </div>

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
