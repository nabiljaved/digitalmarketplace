<?php $page = 'provider-dashboard'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            @component('components.pageheader')
                @slot('title')
                    Provider Dashboard
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-xl-3 col-sm-6 d-flex">
                    <div class="dash-card flex-fill">
                        <div class="dash-header">
                            <div class="dash-widget-header">
                                <div class="d-flex align-items-center">
                                    <span class="dash-widget-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/pro-icon-04.svg') }}" alt="img">
                                    </span>
                                    <div class="dash-widget-info">
                                        <h6>Earnings</h6>
                                        <h5>$50000</h5>
                                    </div>
                                </div>
                                <select>
                                    <option>2023</option>
                                    <option>2022</option>
                                    <option>2021</option>
                                </select>
                            </div>
                            <div class="dash-total">
                                <p>Total Sales: <span>85</span></p>
                                <div class="badge-success">+2.58</div>
                            </div>
                        </div>
                        <div class="dash-widget-img">
                            <img src="{{ URL::asset('/assets/img/icons/pro-chart-01.svg') }}" class="img-fluid"
                                alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="dash-card flex-fill">
                        <div class="dash-header">
                            <div class="dash-widget-header">
                                <div class="d-flex align-items-center">
                                    <span class="dash-widget-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/pro-icon-03.svg') }}" alt="img">
                                    </span>
                                    <div class="dash-widget-info">
                                        <h6>Bookings</h6>
                                        <h5>102</h5>
                                    </div>
                                </div>
                                <select>
                                    <option>2023</option>
                                    <option>2022</option>
                                    <option>2021</option>
                                </select>
                            </div>
                            <div class="dash-total">
                                <p>Over All: <span>60</span></p>
                                <div class="badge-success">+2.58</div>
                            </div>
                        </div>
                        <div class="dash-widget-img">
                            <img src="{{ URL::asset('/assets/img/icons/pro-chart-02.svg') }}" class="img-fluid"
                                alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="dash-card flex-fill">
                        <div class="dash-header">
                            <div class="dash-widget-header">
                                <div class="d-flex align-items-center">
                                    <span class="dash-widget-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/pro-icon-02.svg') }}" alt="img">
                                    </span>
                                    <div class="dash-widget-info">
                                        <h6>Services</h6>
                                        <h5>12</h5>
                                    </div>
                                </div>
                                <select>
                                    <option>2023</option>
                                    <option>2022</option>
                                    <option>2021</option>
                                </select>
                            </div>
                            <div class="dash-total">
                                <p>Providers: <span>120</span></p>
                                <div class="badge-success">+2.58</div>
                            </div>
                        </div>
                        <div class="dash-widget-img">
                            <img src="{{ URL::asset('/assets/img/icons/pro-chart-03.svg') }}" class="img-fluid"
                                alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="dash-card flex-fill">
                        <div class="dash-header">
                            <div class="dash-widget-header">
                                <div class="d-flex align-items-center">
                                    <span class="dash-widget-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/pro-icon-01.svg') }}" alt="img">
                                    </span>
                                    <div class="dash-widget-info">
                                        <h6>Balance</h6>
                                        <h5>$200</h5>
                                    </div>
                                </div>
                                <select>
                                    <option>2023</option>
                                    <option>2022</option>
                                    <option>2021</option>
                                </select>
                            </div>
                            <div class="dash-total">
                                <a href="javascript:;" class="btn btn-primary">Withdraw</a>
                            </div>
                        </div>
                        <div class="dash-widget-img">
                            <img src="{{ URL::asset('/assets/img/icons/pro-chart-04.svg') }}" class="img-fluid"
                                alt="img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex flex-column">

                    <!-- Current Plan -->
                    <h6 class="subhead-title">Current Plan</h6>
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="plan-info">
                                <div class="plan-term">
                                    <h5>Standard</h5>
                                    <p>Our most popular plan for small teams.</p>
                                    <h6><span>Renew Date:</span> Jan 22, 2023</h6>
                                </div>
                                <div class="plan-price">
                                    <h4>$291</h4>
                                    <p>per user/Year</p>
                                </div>
                            </div>
                            <div class="plan-btns">
                                <a href="javascript:;" class="btn btn-danger-light">Cancel Subscription</a>
                                <a href="{{ url('provider-subscription') }}" class="btn btn-secondary-outline">Upgrade</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Current Plan -->

                </div>
                <div class="col-md-6 d-flex flex-column">

                    <!-- Payments -->
                    <h6 class="subhead-title">Payment</h6>
                    <div class="card flex-fill">
                        <div class="card-body pay-next">
                            <div class="plan-info">
                                <div class="plan-term">
                                    <h5>Last Payment</h5>
                                    <h6>January 22, 2023</h6>
                                </div>
                                <div class="plan-price">
                                    <a href="javascript:;" class="btn btn-light-success">Active</a>
                                </div>
                            </div>
                            <div class="plan-info">
                                <div class="plan-term">
                                    <h5>Next Payment</h5>
                                    <h6>January 22, 2023</h6>
                                </div>
                                <div class="plan-price">
                                    <a href="javascript:;" class="btn btn-primary">Manage Payment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Payments -->

                </div>
                <div class="col-md-12">
                    <h6 class="subhead-title">Recent Booking</h6>

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
                                        <span class="book-item">Amount</span> : $100.00 <span
                                            class="badge-grey">COD</span>
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

                    <div class="view-history">
                        <a href="{{ url('provider-booking') }}" class="btn btn-primary">View All History</a>
                    </div>

                </div>


            </div>
        </div>
    </div>

    @component('components.model-popup')
    @endcomponent
@endsection
