<?php $page = 'orders'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">

                <!-- Orders -->
                <div class="col-lg-10 mx-auto">

                    <!-- Breadcrumb -->
                    <div class="page-topbar">
                        <div class="back-link">
                            <a href="{{ url('/') }}"><i class="fa-solid fa-arrow-left-long me-1"></i> Back</a>
                        </div>
                        <div class="breadcrumb">
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Orders</li>
                                    <li class="breadcrumb-item" aria-current="page">ID 2378910</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- /Breadcrumb -->

                    <!-- Bookeing Id -->
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="book-id">
                                <h4>Booking Id: 2378910</h4>
                                <p><i class="feather-calendar"></i> 22 Apr 2023 10:23 AM</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="book-id-action">
                                <a href="javascript:;" class="btn btn-secondary"><i
                                        class="fa-solid fa-location-crosshairs me-2"></i>Live Track</a>
                                <a href="{{ url('invoice') }}" class="btn btn-secondary"><i
                                        class="feather-clipboard me-2"></i>Invoice</a>
                                <a href="javascript:;" class="btn btn-secondary"><i class="feather-printer me-2"></i>Print</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Bookeing Id -->

                    <!-- Slot Booked -->
                    <div class="slot-box">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="slot-booked">
                                    <h6>Booked Slot</h6>
                                    <ul>
                                        <li><i class="feather-calendar"></i> 22 Apr 2023</li>
                                        <li><i class="feather-clock"></i> 10:00AM - 11:00AM</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="slot-user">
                                    <h6>Booked Slot</h6>
                                    <div class="slot-chat">
                                        <div class="slot-user-img">
                                            <img class="avatar" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                alt="">
                                            <div class="slot-user-info">
                                                <p>John Doe</p>
                                                <p>john@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="chat-item">
                                            <div class="slot-user-info">
                                                <p>+1 888 888 8888</p>
                                                <p>Montana, USA</p>
                                            </div>
                                            <div>
                                                <a href="{{ url('customer-chat') }}" class="btn btn-primary"><img
                                                        class="me-1"
                                                        src="{{ URL::asset('/assets/img/icons/message.svg') }}"
                                                        alt="">Chat</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="slot-action">
                                    <h6>Booking Status</h6>
                                    <a href="javascript:;" class="btn btn-light-success">Completed</a>
                                    <a href="javascript:;" class="btn btn-light-warning">Pending</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Slot Booked -->

                    <div class="payment-summary">
                        <div class="row">

                            <!-- Service Location -->
                            <div class="col-md-6">
                                <h6 class="order-title">Service Location & Contact Details</h6>
                                <div class="slot-address">
                                    <ul>
                                        <li>
                                            <span><i class="feather-map-pin"></i></span>
                                            <div>
                                                <h6>Address</h6>
                                                <p>38 Taylor Street Mount Vernon, NY 10550</p>
                                            </div>
                                        </li>
                                        <li>
                                            <span><i class="feather-phone"></i></span>
                                            <div>
                                                <h6>Email</h6>
                                                <p>johnsmith@example.com</p>
                                            </div>
                                        </li>
                                        <li>
                                            <span><i class="feather-phone"></i></span>
                                            <div>
                                                <h6>Phone</h6>
                                                <p>+1 888 888 8888</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="slot-pay">
                                    <p><span class="slot-title">Payment</span> Visa **** **** **** **56<span
                                            class="slot-img"><img src="{{ URL::asset('/assets/img/icons/visa.svg') }}"
                                                alt=""></span></p>
                                </div>
                            </div>
                            <!-- /Service Location -->

                            <!-- Order Summary -->
                            <div class="col-md-6">
                                <h6 class="order-title">Order Summary</h6>
                                <div class="ord-summary">
                                    <div class="order-amt">
                                        <div class="order-info">
                                            <div class="order-img">
                                                <img src="{{ URL::asset('/assets/img/booking.jpg') }}" alt="img">
                                            </div>
                                            <div class="order-profile">
                                                <h6>Computer Services</h6>
                                                <p>Newyork, USA</p>
                                            </div>
                                        </div>
                                        <h5>$599.00</h5>
                                    </div>
                                    <ul>
                                        <li>Sub Total <span class="ord-amt">$257.00</span></li>
                                        <li>Discount<span class="ord-code">NEW2023</span> <span
                                                class="ord-amt">-$11.00</span></li>
                                        <li>Tax @ 12.5% <span class="ord-amt">$5.36</span></li>
                                        <li class="ord-total">Total <span class="ord-amt">$251.36</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Order Summary -->

                        </div>
                    </div>
                    <div class="row">

                        <!-- Booking History -->
                        <div class="col-md-6">
                            <h6 class="order-title">Booking History</h6>
                            <div class="book-history">
                                <ul>
                                    <li>
                                        <h6>Booking</h6>
                                        <p><i class="fa-solid fa-calendar-days me-1"></i> September 5, 2023</p>
                                    </li>
                                    <li>
                                        <h6>Provider Accept</h6>
                                        <p><i class="fa-solid fa-calendar-days me-1"></i> September 5, 2023</p>
                                    </li>
                                    <li>
                                        <h6>Completed on</h6>
                                        <p><i class="fa-solid fa-calendar-days me-1"></i> September 5, 2023</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Booking History -->

                        <!-- Reviews -->
                        <div class="col-md-6">
                            <div class="order-reviews">
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <h6 class="order-title">Reviews</h6>
                                    </div>
                                    <div class="col-7 text-end">
                                        <a href="javascript:;" class="btn btn-secondary"><i
                                                class="feather-plus-circle me-2"></i>Add Review</a>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <div class="order-comment">
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </div>
                                            <h6>A wonderful experience was all the help...</h6>
                                            <p><i class="fa-solid fa-calendar-days me-1"></i> September 5, 2023</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Reviews -->

                    </div>

                </div>
                <!-- /Orders -->

            </div>
        </div>
    </div>
@endsection
