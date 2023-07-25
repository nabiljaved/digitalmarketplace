<?php $page = 'provider-subscription'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            @component('components.widgettitle')
            @endcomponent

            <!-- Subscription -->
            <div class="row provider-price">
                <div class="col-md-12">
                    <div class="choose-title text-center">
                        <h6>Choose Plan</h6>
                        <div class="status-toggle status-tog d-inline-flex align-items-center">
                            Yearly
                            <input type="checkbox" id="status_1" class="check" checked>
                            <label for="status_1" class="checktoggle">checkbox</label>
                            Monthly
                        </div>
                    </div>
                </div>

                <!-- Price List -->
                <div class="col-md-4 d-flex">
                    <div class="price-card flex-fill">
                        <div class="price-head">
                            <div class="price-level">
                                <h6>Basic</h6>
                            </div>
                            <h1>$50 <span>/ month</span></h1>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li class="active">10 Services</li>
                                <li class="active">10 Stafff</li>
                                <li class="active">100 Appointments</li>
                                <li class="inactive">Gallery</li>
                                <li class="inactive">Addition Services</li>
                            </ul>
                            <div class="text-center">
                                <a href="javascript:;" class="btn btn-choose">Choose Plan <i
                                        class="feather-arrow-right-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Price List -->

                <!-- Price List -->
                <div class="col-md-4 d-flex">
                    <div class="price-card active flex-fill">
                        <div class="price-head">
                            <div class="price-level">
                                <h6>Business</h6>
                                <span class="badge-success">Active</span>
                            </div>
                            <h1>$200 <span>/ month</span></h1>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li class="active">20 Services</li>
                                <li class="active">20 Stafff</li>
                                <li class="active">Unlimited Appointments</li>
                                <li class="active">Gallery</li>
                                <li class="inactive">Addition Services</li>
                            </ul>
                            <div class="text-center">
                                <a href="javascript:;" class="btn btn-choose">Choose Plan <i
                                        class="feather-arrow-right-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Price List -->

                <!-- Price List -->
                <div class="col-md-4 d-flex">
                    <div class="price-card flex-fill">
                        <div class="price-head">
                            <div class="price-level">
                                <h6>Enterprise</h6>
                            </div>
                            <h1>$450 <span>/ month</span></h1>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li class="active">Unlimited Services</li>
                                <li class="active">Unlimited Stafff</li>
                                <li class="active">Unlimited Appointments</li>
                                <li class="active">Gallery</li>
                                <li class="active">Addition Services</li>
                            </ul>
                            <div class="text-center">
                                <a href="javascript:;" class="btn btn-choose">Choose Plan <i
                                        class="feather-arrow-right-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Price List -->

            </div>
            <!-- /Subscription -->

        </div>
    </div>

    @component('components.model-popup')
    @endcomponent
@endsection
