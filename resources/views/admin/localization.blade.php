<?php $page = 'localization'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">

        @component('layout.partials.settingssidemenu')
        @endcomponent

        <div class="content w-100">

            @component('admin.components.settingspageheader')
                @slot('titleset')
                    Localization
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-groupheads">
                                        <h2>Profile Picture</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="location-set">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-12">
                                        <div class="location-setcontent">
                                            <h5>Timezone</h5>
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group mb-0">
                                            <label>Timezone</label>
                                            <div class="group-image">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/clock.svg') }}"
                                                    alt="img">
                                                <select class="select">
                                                    <option>(UTC+09:00) Tokyo</option>
                                                    <option>(UTC+11:00) INR</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="location-set">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-12">
                                        <div class="location-setcontent">
                                            <h5>Date Format</h5>
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group mb-0">
                                            <label>Date</label>
                                            <div class="group-image">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/calendar.svg') }}"
                                                    alt="img">
                                                <select class="select">
                                                    <option>30 Sep <script>document.write(new Date().getFullYear())</script></option>
                                                    <option>Jun 01 <script>document.write(new Date().getFullYear())</script></option>
                                                    <option><script>document.write(new Date().getFullYear())</script> 01 Jun </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="location-set mb-0">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-12">
                                        <div class="location-setcontent">
                                            <h5>Time Format</h5>
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group mb-0">
                                            <label>Time</label>
                                            <div class="group-image">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/clock.svg') }}"
                                                    alt="img">
                                                <select class="select">
                                                    <option>12:00PM</option>
                                                    <option>01:00PM</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-groupheads">
                                        <h2>Currency & Decimal</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="location-set">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-12">
                                        <div class="location-setcontent">
                                            <h5>Default Currency</h5>
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group mb-0">
                                            <label>Default Currency</label>
                                            <div class="group-image">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/clock.svg') }}"
                                                    alt="img">
                                                <select class="select">
                                                    <option>USD</option>
                                                    <option>INR</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="location-set mb-0">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-12">
                                        <div class="location-setcontent">
                                            <h5>Choose Currency</h5>
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group mb-0">
                                            <label>Select Currency</label>
                                            <select class="select" multiple="multiple">
                                                <option selected>USD</option>
                                                <option selected>Rupees</option>
                                                <option>QWD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-groupheads">
                                        <h2>Country Settings</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="location-set">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-12">
                                        <div class="location-setcontent">
                                            <h5>Country Restriction</h5>
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group mb-0">
                                            <label>Country Restriction</label>
                                            <div class="group-image">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/global.svg') }}"
                                                    alt="img">
                                                <select class="select">
                                                    <option>Allow all countries</option>
                                                    <option>USA</option>
                                                </select>
                                            </div>
                                            <p>Allow or disallowed the countries</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="location-set mb-0">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-12">
                                        <div class="location-setcontent">
                                            <h5>Choose Countries</h5>
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group mb-0">
                                            <label>Select Countries</label>
                                            <select class="select" multiple="multiple">
                                                <option selected>USD</option>
                                                <option selected>Rupees</option>
                                                <option>QWD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-groupheads">
                                        <h2>Language Settings</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="location-set">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-12">
                                        <div class="location-setcontent">
                                            <h5>Default Language</h5>
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group mb-0">
                                            <label>Select Language</label>
                                            <div class="group-image">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/global.svg') }}"
                                                    alt="img">
                                                <select class="select">
                                                    <option>English</option>
                                                    <option>Chinese</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="location-set mb-0">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-12">
                                        <div class="location-setcontent">
                                            <h5>Language Switcher</h5>
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
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
                <div class="col-lg-12">
                    <div class="btn-path">
                        <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
