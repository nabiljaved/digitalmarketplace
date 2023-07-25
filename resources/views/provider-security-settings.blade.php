<?php $page = 'provider-security-settings'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row">
                <div class="col-md-12">

                    <!-- Security settings -->
                    <div class="widget-title">
                        <h4>Security Settings</h4>
                    </div>
                    <div class="linked-item">
                        <div class="linked-wrap">
                            <div class="linked-acc">
                                <span class="link-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/lock-icon.svg') }}" alt="">
                                </span>
                                <div class="linked-info">
                                    <h6>Password</h6>
                                    <p>Last Changed <span>22 Apr 2023, 10:30:55 AM</span></p>
                                </div>
                            </div>
                            <div class="linked-action">
                                <a href="{{ url('provider-change-password') }}" class="btn btn-secondary btn-set">Change
                                    Password</a>
                            </div>
                        </div>
                    </div>
                    <div class="linked-item">
                        <div class="linked-wrap">
                            <div class="linked-acc">
                                <span class="link-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/scan-icon.svg') }}" alt="">
                                </span>
                                <div class="linked-info">
                                    <h6>Two Factor Authendication <span class="badge badge-success">Enable</span></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur </p>
                                </div>
                            </div>
                            <div class="linked-action">
                                <a href="javascript:void(0);" class="btn btn-secondary btn-set">Disable</a>
                            </div>
                        </div>
                    </div>
                    <div class="linked-item">
                        <div class="linked-wrap">
                            <div class="linked-acc">
                                <span class="link-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/mobile-icon.svg') }}" alt="">
                                </span>
                                <div class="linked-info">
                                    <h6>Phone Number Verification</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur </p>
                                </div>
                            </div>
                            <div class="linked-action">
                                <a href="javascript:void(0);" class="link-close"><i
                                        class="fa-solid fa-circle-xmark"></i></a>
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#change-phone"
                                    class="btn btn-primary btn-connect">Change</a>
                                    <a href="javascript:void(0);" class="btn-acc" data-bs-toggle="modal" data-bs-target="#del-phone">Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="linked-item">
                        <div class="linked-wrap">
                            <div class="linked-acc">
                                <span class="link-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/scan-icon.svg') }}" alt="">
                                </span>
                                <div class="linked-info">
                                    <h6>Email Verification</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur </p>
                                </div>
                            </div>
                            <div class="linked-action">
                                <a href="javascript:void(0);" class="link-check"><i
                                        class="fa-solid fa-circle-check"></i></a>
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#change-email"
                                    class="btn btn-primary btn-connect">Change</a>
                                    <a href="javascript:void(0);" class="btn-acc" data-bs-toggle="modal" data-bs-target="#del-email">Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="linked-item">
                        <div class="linked-wrap">
                            <div class="linked-acc">
                                <span class="link-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/monitor-icon.svg') }}" alt="">
                                </span>
                                <div class="linked-info">
                                    <h6>Device Management</h6>
                                    <p>Last Changed <span>22 Apr 2023, 10:30:55 AM</span></p>
                                </div>
                            </div>
                            <div class="linked-action">
                                <a href="{{ url('provider-device-management') }}"
                                    class="btn btn-secondary btn-set">Manage</a>
                            </div>
                        </div>
                    </div>
                    <div class="linked-item">
                        <div class="linked-wrap">
                            <div class="linked-acc">
                                <span class="link-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/user-edit.svg') }}" alt="">
                                </span>
                                <div class="linked-info">
                                    <h6>Account Activity</h6>
                                    <p>Last login <span>22 Apr 2023, 10:21:55 AM</span></p>
                                </div>
                            </div>
                            <div class="linked-action">
                                <a href="{{ url('provider-login-activity') }}" class="btn btn-secondary btn-set">View
                                    All</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Security-settings -->
                </div>

            </div>

        </div>
    </div>

    @component('components.model-popup')
    @endcomponent
@endsection
