<?php $page = 'sms-settings'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">

        @component('layout.partials.settingssidemenu')
        @endcomponent

        <div class="content w-100">

            @component('admin.components.settingspageheader')
                @slot('titleset')
                    SMS Settings
                @endslot
            @endcomponent

            <div class="location-set">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="location-setcontent">
                            <h5>SMS</h5>
                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 text-end">
                        <div class="active-switch">
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="sliders round"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="location-set">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="location-setcontent">
                            <h5>Default OTP</h5>
                            <h6>You can use default OTP 1234 for Demo</h6>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 text-end">
                        <div class="active-switch">
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="sliders round"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row location-set">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="form-grouphead mb-2">
                        <h2>Mail Provider</h2>
                    </div>
                    <div class="nav-menus">
                        <img src="{{ URL::asset('/admin_assets/img/company/nexmo.png') }}" alt="img">
                        <div class="settings-view">
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                            <a href="{{ url('admin/nexmo') }}" class="ms-3 me-0"><i class="fe fe-settings"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="form-grouphead mb-2">
                        <h2>&nbsp;</h2>
                    </div>
                    <div class="nav-menus">
                        <img src="{{ URL::asset('/admin_assets/img/company/2-factor.png') }}" alt="img">
                        <div class="settings-view">
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                            <a href="{{ url('admin/nexmo') }}" class="ms-3 me-0"><i class="fe fe-settings"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="form-grouphead mb-2">
                        <h2>&nbsp;</h2>
                    </div>
                    <div class="nav-menus">
                        <img src="{{ URL::asset('/admin_assets/img/company/twilio.png') }}" alt="img">
                        <div class="settings-view">
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                            <a href="{{ url('admin/nexmo') }}" class="ms-3 me-0"><i class="fe fe-settings"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
