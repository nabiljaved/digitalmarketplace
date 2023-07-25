<?php $page = 'membarship'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Membership Plans
                @endslot
            @endcomponent

            <div class="row">

                <div class="col-md-12">
                    <div class="price-toggle">
                        <div class="status-toggle d-inline-flex align-items-center">
                            Monthly
                            <input type="checkbox" id="status_1" class="check">
                            <label for="status_1" class="checktoggle">checkbox</label>
                            Yearly
                        </div>
                    </div>
                </div>

                <!-- Price List -->
                <div class="col-md-4 d-flex">
                    <div class="price-card flex-fill">
                        <div class="price-head">
                            <div class="price-level">
                                <h6>Basic</h6>
                                <span class="badge-active">Action</span>
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
                                <a href="javascript:void(0);" class="btn btn-choose">Choose</a>
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
                                <h6>Business</h6>
                            </div>
                            <h1>$200 <span>/ month</span></h1>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li class="active">20 Services</li>
                                <li class="active">20 Stafff</li>
                                <li class="active">Unlimited Appointments</li>
                                <li class="inactive">Gallery</li>
                                <li class="inactive">Addition Services</li>
                            </ul>
                            <div class="text-center">
                                <a href="javascript:void(0);" class="btn btn-choose">Choose</a>
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
                                <a href="javascript:void(0);" class="btn btn-choose">Choose</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Price List -->

            </div>
        </div>
    </div>
@endsection
