<?php $page = 'plugins-manager'; ?>
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
                                    <a class="delete-plugin" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#delete-item"><i class="fe fe-trash-2 me-2"></i>Delete</a>
                                </div>
                                <div class="active-switch">
                                    <label class="switch">
                                        <input type="checkbox" checked="">
                                        <span class="sliders round"></span>
                                    </label>
                                </div>
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
                                    <a class="delete-plugin" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#delete-item"><i class="fe fe-trash-2 me-2"></i>Delete</a>
                                </div>
                                <div class="active-switch">
                                    <label class="switch">
                                        <input type="checkbox" checked="">
                                        <span class="sliders round"></span>
                                    </label>
                                </div>
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
                                    <a class="delete-plugin" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#delete-item"><i class="fe fe-trash-2 me-2"></i>Delete</a>
                                </div>
                                <div class="active-switch">
                                    <label class="switch">
                                        <input type="checkbox" checked="">
                                        <span class="sliders round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @component('admin.components.deletemodel')
        @slot('title1')
            Delete Plugins Manager
        @endslot
    @endcomponent
@endsection
