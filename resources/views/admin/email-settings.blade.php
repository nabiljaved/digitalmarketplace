<?php $page = 'email-settings'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">

        @component('layout.partials.settingssidemenu')
        @endcomponent

        <div class="content w-100">

            @component('admin.components.settingspageheader')
                @slot('titleset')
                    Email Settings
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>Mail Provider</label>
                                </div>
                                <div class="col-lg-6">
                                    <div class="nav-menus location-set">
                                        <h4>PHP Mail</h4>
                                        <div class="settings-view">
                                            <a href="{{ url('admin/php-mail') }}"><i class="fe fe-settings"></i></a>
                                            <div class="active-switch">
                                                <label class="switch">
                                                    <input type="checkbox" checked="">
                                                    <span class="sliders round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="nav-menus location-set">
                                        <h4>SMTP</h4>
                                        <div class="settings-view">
                                            <a href="{{ url('admin/smtp') }}"><i class="fe fe-settings"></i></a>
                                            <div class="active-switch">
                                                <label class="switch">
                                                    <input type="checkbox" checked="">
                                                    <span class="sliders round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-sm-6">
                                                <h4>Email From Name</h4>
                                                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                                            </div>
                                            <div class="col-lg-6 col-sm-12">
                                                <div class="form-group mb-0">
                                                    <label>Name</label>
                                                    <input type="text" placeholder="Enter From Name"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-sm-6">
                                                <h4>Email From Address</h4>
                                                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                                            </div>
                                            <div class="col-lg-6 col-sm-12">
                                                <div class="form-group mb-0">
                                                    <label>Address</label>
                                                    <input type="text" placeholder="Enter Address" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-set mb-0">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-sm-6">
                                                <h4>Email Global Footer</h4>
                                                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                                            </div>
                                            <div class="col-lg-6 col-sm-12">
                                                <div class="form-group mb-0">
                                                    <label>Global Footer</label>
                                                    <input type="text" placeholder="Enter Your Message"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-groupheads">
                                <h2>Send Test Email</h2>
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" placeholder="Enter Email Address" class="form-control">
                            </div>
                            <div class="btn-path">
                                <a href="javascript:void(0);" class="btn btn-cancel me-3">Reset</a>
                                <a href="javascript:void(0);" class="btn btn-primary">Send Email</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
