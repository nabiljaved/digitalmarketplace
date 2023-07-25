<?php $page = 'invoice'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 mx-auto">

                    <!-- Breadcrumb -->
                    @component('components.breadcrumb')
                    @endcomponent
                    <!-- /Breadcrumb -->

                    <!-- Invoice -->
                    <div class="invoice-wrap">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="invoice-logo">
                                    <img src="{{ URL::asset('/assets/img/logo.svg') }}" class="img-fluid" alt="img">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="invoice-head">
                                    <h5>Invoice</h5>
                                    <ul>
                                        <li><i class="feather-file-text"></i> #LL2378910</li>
                                        <li><i class="feather-calendar"></i> Issue date: 22 Apr 2023</li>
                                        <li><i class="feather-calendar"></i> Due date: 25 Jan 2023</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="invoice-address">
                                    <h6>Invoice From:</h6>
                                    <ul>
                                        <li>Truelysell</li>
                                        <li>367 Hillcrest Lane, Irvine, California, United States</li>
                                        <li>truelysell@example.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="invoice-address invoice-to">
                                    <h6>Invoice To:</h6>
                                    <ul>
                                        <li>Example Company Name</li>
                                        <li>1620 Jerry Dove Drive Myrtle Beach, SC 29577</li>
                                        <li>LillianBMacon@rhyta.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="table-responsive invoice-table">
                                    <table class="table mb-0 custom-table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>#</th>
                                                <th>Services</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Hours</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <h2 class="table-avatar table-sml">
                                                        <a href="javascript:;" class="avatar avatar-m me-2"><img
                                                                class="avatar-img rounded"
                                                                src="{{ URL::asset('/assets/img/services/service-06.jpg') }}"
                                                                alt="User Image"></a>
                                                        <a href="javascript:;">Computer Repair</a>
                                                    </h2>
                                                </td>
                                                <td>Lorem ipsum dolor amet, adipiscing elit</td>
                                                <td>$80</td>
                                                <td>1 Hour</td>
                                                <td>$80</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <h2 class="table-avatar table-sml">
                                                        <a href="javascript:;" class="avatar avatar-m me-2"><img
                                                                class="avatar-img rounded"
                                                                src="{{ URL::asset('/assets/img/services/service-02.jpg') }}"
                                                                alt="User Image"></a>
                                                        <a href="javascript:;">Car Repair Services</a>
                                                    </h2>
                                                </td>
                                                <td>Lorem ipsum dolor amet, adipiscing elit</td>
                                                <td>$80</td>
                                                <td>1 Hour</td>
                                                <td>$80</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <h2 class="table-avatar table-sml">
                                                        <a href="javascript:;" class="avatar avatar-m me-2"><img
                                                                class="avatar-img rounded"
                                                                src="{{ URL::asset('/assets/img/services/service-04.jpg') }}"
                                                                alt="User Image"></a>
                                                        <a href="javascript:;">Steam Car Wash</a>
                                                    </h2>
                                                </td>
                                                <td>Lorem ipsum dolor amet, adipiscing elit</td>
                                                <td>$80</td>
                                                <td>1 Hour</td>
                                                <td>$80</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <h2 class="table-avatar table-sml">
                                                        <a href="javascript:;" class="avatar avatar-m me-2"><img
                                                                class="avatar-img rounded"
                                                                src="{{ URL::asset('/assets/img/services/service-05.jpg') }}"
                                                                alt="User Image"></a>
                                                        <a href="javascript:;">House Cleaning </a>
                                                    </h2>
                                                </td>
                                                <td>Lorem ipsum dolor amet, adipiscing elit</td>
                                                <td>$80</td>
                                                <td>1 Hour</td>
                                                <td>$80</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="invoice-payment">
                                    <h6>Payment info:</h6>
                                    <ul>
                                        <li>Credit Card - 123***********789</li>
                                        <li class="pay-amt"><span>Amount:</span> $252.36</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="invoice-total">
                                    <ul>
                                        <li>Sub Total <span>$244.00</span></li>
                                        <li>Tax(5%) <span>+1$8.36</span></li>
                                        <li class="tot-amt">Total <span>$252.36</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="invoice-terms">
                        <h5>Terms & Conditions:</h5>
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nis</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor incididunt ut labore
                                et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nis</li>
                        </ul>
                    </div>
                    <!-- /Invoice -->
                </div>


            </div>
        </div>
    </div>
    @component('components.model-popup')
    @endcomponent
@endsection
