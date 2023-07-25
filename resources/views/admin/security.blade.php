<?php $page = 'security'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">

        @component('layout.partials.settingssidemenu')
        @endcomponent

        <div class="content w-100">

            @component('admin.components.settingspageheader')
                @slot('titleset')
                    Security
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-12">
                    <div class="connectetapps">
                        <div class="connectetappsimg">
                            <div class="connectet-img">
                                <img src="{{ URL::asset('/admin_assets/img/icons/lock.svg') }}" alt="img">
                            </div>
                            <div class="connectet-content">
                                <h3>Password</h3>
                                <p>Last Changed <span> 22 Sep <script>document.write(new Date().getFullYear())</script>, 10:30:55 AM</span></p>
                            </div>
                        </div>
                        <div class="connectetappscontent">
                            <a href="{{ url('admin/change-password') }}" class="btn btn-linedark">Change Password</a>
                        </div>
                    </div>
                    <div class="connectetapps">
                        <div class="connectetappsimg">
                            <div class="connectet-img">
                                <img src="{{ URL::asset('/admin_assets/img/icons/scan.svg') }}" alt="img">
                            </div>
                            <div class="connectet-content">
                                <div class="d-flex align-items-center">
                                    <h3>Two Factor Authendication</h3>
                                    <h6 class="success-labels ms-3">Connect</h6>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur </p>
                            </div>
                        </div>
                        <div class="connectetappscontent">
                            <a href="javascript:void(0);" class="btn btn-linedark">Disable</a>
                        </div>
                    </div>
                    <div class="connectetapps">
                        <div class="connectetappsimg">
                            <div class="connectet-img">
                                <img src="{{ URL::asset('/admin_assets/img/icons/mobile.svg') }}" alt="img">
                            </div>
                            <div class="connectet-content">
                                <h3>Phone Number Verification </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur </p>
                            </div>
                        </div>
                        <div class="connectetappscontent">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);" class="text-danger"><i class="fa fa-times-circle"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="btn btn-change" data-bs-toggle="modal"
                                        data-bs-target="#change-no">Change</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="btn btn-removes">Remove</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="connectetapps">
                        <div class="connectetappsimg">
                            <div class="connectet-img">
                                <img src="{{ URL::asset('/admin_assets/img/icons/email.svg') }}" alt="img">
                            </div>
                            <div class="connectet-content">
                                <h3>Email Verification</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur </p>
                            </div>
                        </div>
                        <div class="connectetappscontent">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);" class="text-success"><i class="fa fa-check-circle"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="btn btn-change" data-bs-toggle="modal"
                                        data-bs-target="#change-email">Change</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="btn btn-removes">Remove</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="connectetapps">
                        <div class="connectetappsimg">
                            <div class="connectet-img">
                                <img src="{{ URL::asset('/admin_assets/img/icons/monitor.svg') }}" alt="img">
                            </div>
                            <div class="connectet-content">
                                <h3>Device Management</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur </p>
                            </div>
                        </div>
                        <div class="connectetappscontent">
                            <a href="{{ url('admin/device-management') }}" class="btn btn-linedark">Manage</a>
                        </div>
                    </div>
                    <div class="connectetapps">
                        <div class="connectetappsimg">
                            <div class="connectet-img">
                                <img src="{{ URL::asset('/admin_assets/img/icons/user-edit.svg') }}" alt="img">
                            </div>
                            <div class="connectet-content">
                                <h3>Account Activity</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur </p>
                            </div>
                        </div>
                        <div class="connectetappscontent">
                            <a href="{{ url('admin/login-activity') }}" class="btn btn-linedark">View All</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="btn-path">
                        <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @component('admin.components.model')
    @endcomponent
@endsection
