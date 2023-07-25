<?php $page = 'provider-booking'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            @component('components.pageheader')
                @slot('title')
                    Booking List
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-md-12">
                    <!-- Booking List -->
                    <div class="booking-list">
                        <div class="booking-widget">
                            <div class="booking-img">
                                <a href="{{ url('service-details') }}">
                                    <img src="{{ URL::asset('/assets/img/services/service-08.jpg') }}" alt="User Image">
                                </a>
                                <div class="fav-item">
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="booking-det-info">
                                <h3>
                                    <a href="{{ url('service-details') }}">Computer Services </a><span
                                        class="badge badge-danger">Cancelled</span>
                                </h3>
                                <ul class="booking-details">
                                    <li>
                                        <span class="book-item">Booking Date</span> : 27 Apr 2023, 17:00-18:00
                                    </li>
                                    <li>
                                        <span class="book-item">Amount</span> : $100.00 <span class="badge-grey">COD</span>
                                    </li>
                                    <li>
                                        <span class="book-item">Location</span> : Newyork, USA
                                    </li>
                                    <li>
                                        <span class="book-item">Customer</span> :
                                        <div class="user-book">
                                            <div class="avatar avatar-xs">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}">
                                            </div>
                                            John Doe
                                        </div>
                                        <p>info@johndoe.com</p>
                                        <p>+1 888 888 8888</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="booking-action">
                            <a href="{{ url('booking') }}" class="btn btn-secondary">Reschedule</a>
                        </div>
                    </div>
                    <!-- /Booking List -->

                    <!-- Booking List -->
                    <div class="booking-list">
                        <div class="booking-widget">
                            <div class="booking-img">
                                <a href="{{ url('service-details') }}">
                                    <img src="{{ URL::asset('/assets/img/services/service-18.jpg') }}" alt="User Image">
                                </a>
                                <div class="fav-item">
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="booking-det-info">
                                <h3>
                                    <a href="{{ url('service-details') }}">Car Repair Services</a> <span
                                        class="badge badge-success">Completed</span>
                                </h3>
                                <ul class="booking-details">
                                    <li>
                                        <span class="book-item">Booking Date</span> : 23 Apr 2023, 10:00-11:00
                                    </li>
                                    <li><span class="book-item">Amount</span> : $50.00 <span class="badge-grey">COD</span>
                                    </li>
                                    <li><span class="book-item">Location</span> : Alabama, USA</li>
                                    <li>
                                        <span class="book-item">Customer</span> :
                                        <div class="user-book">
                                            <div class="avatar avatar-xs">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg') }}">
                                            </div>
                                            John Smith
                                        </div>
                                        <p>info@johnsmith.com</p>
                                        <p>+1 607-276-5393</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="booking-action">
                            <a href="{{ url('booking') }}" class="btn btn-primary">Rebook</a>
                            <a href="javascript:void(0);" class="btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#add-review"><i class="feather-plus-circle"></i> Add Review</a>
                            <div class="view-action">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <a href="{{ url('service-details') }}" class="view-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Booking List -->

                    <!-- Booking List -->
                    <div class="booking-list">
                        <div class="booking-widget">
                            <div class="booking-img">
                                <a href="{{ url('service-details') }}">
                                    <img src="{{ URL::asset('/assets/img/services/service-07.jpg') }}" alt="User Image">
                                </a>
                                <div class="fav-item">
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="booking-det-info">
                                <h3>
                                    <a href="{{ url('service-details') }}">Interior Designing</a> <span
                                        class="badge badge-info">Inprogress</span>
                                </h3>
                                <ul class="booking-details">
                                    <li>
                                        <span class="book-item">Booking Date</span> : 27 Apr 2023, 17:00-18:00
                                    </li>
                                    <li><span class="book-item">Amount</span> : $50.00 <span class="badge-grey">COD</span>
                                    </li>
                                    <li><span class="book-item">Location</span> : Washington, DC, USA</li>
                                    <li>
                                        <span class="book-item">Customer</span> :
                                        <div class="user-book">
                                            <div class="avatar avatar-xs">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="{{ URL::asset('/assets/img/profiles/avatar-06.jpg') }}">
                                            </div>
                                            Quentin
                                        </div>
                                        <p>info@quentin.com</p>
                                        <p>+1 601-810-9218</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="booking-action">
                            <a href="{{ url('provider-chat') }}" class="btn btn-primary"><i
                                    class="feather-message-square"></i> Chat</a>
                            <a href="javascript:void(0);" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                    <!-- /Booking List -->

                    <!-- Booking List -->
                    <div class="booking-list">
                        <div class="booking-widget">
                            <div class="booking-img">
                                <a href="{{ url('service-details') }}">
                                    <img src="{{ URL::asset('/assets/img/services/service-13.jpg') }}" alt="User Image">
                                </a>
                                <div class="fav-item">
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="booking-det-info">
                                <h3>
                                    <a href="{{ url('service-details') }}">House Cleaning Services</a> <span
                                        class="badge badge-warning">Pending</span>
                                </h3>
                                <ul class="booking-details">
                                    <li>
                                        <span class="book-item">Booking Date</span> : 27 Apr 2023, 17:00-18:00
                                    </li>
                                    <li><span class="book-item">Amount</span> : $375.00 <span
                                            class="badge-grey">COD</span></li>
                                    <li><span class="book-item">Location</span> : Virginia, USA</li>
                                    <li>
                                        <span class="book-item">Customer</span> :
                                        <div class="user-book">
                                            <div class="avatar avatar-xs">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}">
                                            </div>
                                            Johnson
                                        </div>
                                        <p>info@johnson.com</p>
                                        <p>+1 312-328-3970</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="booking-action">
                            <a href="{{ url('provider-chat') }}" class="btn btn-primary"><i
                                    class="feather-message-square"></i> Chat</a>
                            <a href="javascript:void(0);" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                    <!-- /Booking List -->

                    <!-- Booking List -->
                    <div class="booking-list">
                        <div class="booking-widget">
                            <div class="booking-img">
                                <a href="{{ url('service-details') }}">
                                    <img src="{{ URL::asset('/assets/img/services/service-06.jpg') }}" alt="User Image">
                                </a>
                                <div class="fav-item">
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="booking-det-info">
                                <h3>
                                    <a href="{{ url('service-details') }}">Electric Panel Repairing Service</a> <span
                                        class="badge badge-danger">Cancelled</span>
                                </h3>
                                <ul class="booking-details">
                                    <li>
                                        <span class="book-item">Booking Date</span> : 27 Apr 2023, 17:00-18:00
                                    </li>
                                    <li><span class="book-item">Amount</span> : $100.00 <span
                                            class="badge-grey">COD</span></li>
                                    <li><span class="book-item">Location</span> : Newyork, USA</li>
                                    <li>
                                        <span class="book-item">Customer</span> :
                                        <div class="user-book">
                                            <div class="avatar avatar-xs">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}">
                                            </div>
                                            John Doe
                                        </div>
                                        <p>Info@johndoe.com</p>
                                        <p>+1 888 888 8888</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="booking-action">
                            <a href="{{ url('booking') }}" class="btn btn-primary">Rebook</a>
                            <a href="javascript:void(0);" class="btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#add-review"><i class="feather-plus-circle"></i> Add Review</a>
                            <div class="view-action">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <a href="{{ url('service-details') }}" class="view-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Booking List -->
                </div>
            </div>

            @component('components.pagination')
            @endcomponent
        </div>
    </div>

    @component('components.model-popup')
    @endcomponent
@endsection
