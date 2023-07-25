<?php $page = 'available-plugins'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Plugins Manager
                @endslot
            @endcomponent

            @component('admin.components.pluginstabsets')
            @endcomponent

            <div class="row">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="service-widget service-fav">
                        <div class="service-img">
                            <a href="{{ url('admin/view-service') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/admin_assets/img/services/service-14.jpg') }}">
                            </a>
                        </div>
                        <div class="service-content">
                            <div class="serv-info">
                                <div class="serv-users">
                                    <h6>Paytm<span>Version 1.0.0</span></h6>
                                </div>
                            </div>
                            <div class="serv-update">
                                <h6>$49.00</h6>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);" class="preview-plugin"><i class="fe fe-eye"></i>
                                            Preview</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="delete-plugin"><i
                                                class="fe fe-shopping-cart me-1"></i>Purchase</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="service-widget service-fav">
                        <div class="service-img">
                            <a href="{{ url('admin/view-service') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/admin_assets/img/services/service-15.jpg') }}">
                            </a>
                        </div>
                        <div class="service-content">
                            <div class="serv-info">
                                <div class="serv-users">
                                    <h6>Google Analytics<span>Version 1.0.0</span></h6>
                                </div>
                            </div>
                            <div class="serv-update">
                                <h6>$49.00</h6>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);" class="preview-plugin"><i class="fe fe-eye"></i>
                                            Preview</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="delete-plugin"><i
                                                class="fe fe-shopping-cart me-1"></i>Purchase</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="service-widget service-fav">
                        <div class="service-img">
                            <a href="{{ url('admin/view-service') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/admin_assets/img/services/service-16.jpg') }}">
                            </a>
                        </div>
                        <div class="service-content">
                            <div class="serv-info">
                                <div class="serv-users">
                                    <h6>Caldera Forms<span>Version 1.0.0</span></h6>
                                </div>
                            </div>
                            <div class="serv-update">
                                <h6>$49.00</h6>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);" class="preview-plugin"><i class="fe fe-eye"></i>
                                            Preview</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="delete-plugin"><i
                                                class="fe fe-shopping-cart me-1"></i>Purchase</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
