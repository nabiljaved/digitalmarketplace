<?php $page = 'social-authentication'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content w-100">
            <div class="form-groupheads d-flex d-flex justify-content-between">
                <h2>Enable Social Authendication</h2>
                <div class="active-switch d-flex align-items-center">
                    <h6 class="fs-14">Enable</h6>
                    <label class="switch">
                        <input type="checkbox" checked="">
                        <span class="sliders round"></span>
                    </label>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="nav-menus location-set loc-set soc-active">
                        <img src="{{ URL::asset('/admin_assets/img/company/facebook.png') }}" alt="img">
                        <div class="settings-view">
                            <a href="{{ url('admin/facebook-api') }}" class="me-3 me-0"><i class="fe fe-settings"></i></a>
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="nav-menus location-set loc-set">
                        <img src="{{ URL::asset('/admin_assets/img/company/google.png') }}" alt="img">
                        <div class="settings-view">
                            <a href="{{ url('admin/google-api') }}" class="me-3 me-0"><i class="fe fe-settings"></i></a>
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
