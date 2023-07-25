<?php $page = 'provider-plan'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row">
                <div class="col-md-12">

                    <!-- Security settings -->
                    <div class="widget-title">
                        <h4>Plan & Billings</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 d-flex flex-column">

                            <!-- Current Plan -->
                            <h6 class="subhead-title">Current Plan</h6>
                            <div class="card flex-fill">
                                <div class="card-body">
                                    <div class="plan-info">
                                        <div class="plan-term">
                                            <h5>Standard</h5>
                                            <p>Our most popular plan for small teams.</p>
                                            <h6><span><i class="feather-calendar"></i> Renew Date:</span> Jan 22, 2023</h6>
                                        </div>
                                        <div class="plan-price">
                                            <h4>$291</h4>
                                            <p>per user/Year</p>
                                        </div>
                                    </div>
                                    <div class="plan-btns">
                                        <a href="javascript:;" class="btn btn-danger-light">Cancel Subscription</a>
                                        <a href="javascript:;" class="btn btn-secondary-outline">Upgrade</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Current Plan -->

                        </div>
                        <div class="col-lg-6 d-flex flex-column">

                            <!-- Payments -->
                            <h6 class="subhead-title">Payment</h6>
                            <div class="card flex-fill">
                                <div class="card-body pay-next">
                                    <div class="plan-info">
                                        <div class="plan-term">
                                            <h5>Last Payment</h5>
                                            <h6><i class="feather-calendar"></i> January 22, 2023</h6>
                                        </div>
                                        <div class="plan-price">
                                            <a href="javascript:;" class="btn btn-light-success">Active</a>
                                        </div>
                                    </div>
                                    <div class="plan-info">
                                        <div class="plan-term">
                                            <h5>Next Payment</h5>
                                            <h6><i class="feather-calendar"></i> January 22, 2023</h6>
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
                            <h6 class="user-title">Payment Method</h6>
                            <div class="row">
                                <!-- Credit Card -->
                                <div class="col-md-6 col-xl-4 d-flex flex-column">
                                    <div class="card card-payments active flex-fill">
                                        <div class="card-body">
                                            <div>
                                                <h6>Credit Card</h6>
                                                <div class="card-num">
                                                    <div class="visa-img">
                                                        <img src="{{ URL::asset('/assets/img/icons/visa.svg') }}"
                                                            alt="">
                                                    </div>
                                                    <h6>**** **** **** <span>9525</span></h6>
                                                </div>
                                            </div>
                                            <div class="card-remove">
                                                <a href="javascript:;">Remove Card <i class="feather-trash-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Credit Card -->

                                <!-- Debit Card -->
                                <div class="col-md-6 col-xl-4 d-flex flex-column">
                                    <div class="card card-payments flex-fill">
                                        <div class="card-body">
                                            <div>
                                                <h6>Debit Card</h6>
                                                <div class="card-num">
                                                    <div class="visa-img">
                                                        <img src="{{ URL::asset('/assets/img/icons/mastercard.svg') }}"
                                                            alt="">
                                                    </div>
                                                    <h6>**** **** **** <span>9525</span></h6>
                                                </div>
                                            </div>
                                            <div class="card-remove">
                                                <a href="javascript:;">Remove Card <i class="feather-trash-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Debit Card -->

                                <!-- Add Card -->
                                <div class="col-md-6 col-xl-4 d-flex flex-column">
                                    <div class="card-payment-add flex-fill">
                                        <a href="javascript:;">
                                            <span><i class="feather-plus"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <!-- /Add Card -->

                            </div>

                            <!-- Billing History -->
                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <h6 class="subhead-title">Billing History</h6>
                                    </div>
                                    <div class="col-md-8 d-flex align-items-center justify-content-md-end flex-wrap">
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
                                                        <img src="{{ URL::asset('/assets/img/icons/filter-icon.svg') }}"
                                                            alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="provide-table">
                                <div class="table-responsive">
                                    <table class="table custom-table datatable mb-0" id="data-table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Payout Date</th>
                                                <th>Plan Details</th>
                                                <th>Amount</th>
                                                <th>Invoice</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-body">Sep 26, 2023</td>
                                                <td class="text-body">Basic, Monthly</td>
                                                <td class="text-dark fw-500">$29.00</td>
                                                <td class="text-body">Invoice 08 sep, 2023</td>
                                                <td><span class="badge-success">Paid</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-body">Sep 26, 2023</td>
                                                <td class="text-body">Basic, Monthly</td>
                                                <td class="text-dark fw-500">$29.00</td>
                                                <td class="text-body">Invoice 08 sep, 2023</td>
                                                <td><span class="badge-success">Paid</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-body">Sep 26, 2023</td>
                                                <td class="text-body">Basic, Monthly</td>
                                                <td class="text-dark fw-500">$29.00</td>
                                                <td class="text-body">Invoice 08 sep, 2023</td>
                                                <td><span class="badge-success">Paid</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-body">Sep 26, 2023</td>
                                                <td class="text-body">Basic, Monthly</td>
                                                <td class="text-dark fw-500">$29.00</td>
                                                <td class="text-body">Invoice 08 sep, 2023</td>
                                                <td><span class="badge-danger">Pending</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div id="tablelength"></div>
                                </div>
                                <div class="col-md-7">
                                    <div class="table-ingopage">
                                        <div id="tableinfo"></div>
                                        <div id="tablepagination"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Billing History -->

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    @component('components.model-popup')
    @endcomponent
@endsection
