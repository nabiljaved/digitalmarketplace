<?php $page = 'currency-settings'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper ">
        <div class="content w-100 ps-0 pt-0">

            @component('layout.partials.settingssidemenu')
            @endcomponent

            <div class="row">
                <div class="content-table">

                    @component('admin.components.settingspageheader')
                        @slot('titleset')
                            Currency Settings
                        @endslot
                    @endcomponent

                    <div class="col-12">
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
                                        <select class="select">
                                            <option>US Dollar</option>
                                            <option>INR</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="location-set">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <div class="location-setcontent">
                                        <h5>Thousand Seperator</h5>
                                        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group mb-0">
                                        <select class="select">
                                            <option>1,234,567.89</option>
                                            <option>1,244,557.89</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="location-set">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <div class="location-setcontent">
                                        <h5>Symbol Format</h5>
                                        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <ul class="custom-radiosbtn form-group mb-0">
                                        <li>
                                            <label class="radiossets">$100 Left
                                                <input type="radio" checked="checked" name="radio">
                                                <span class="checkmark-radio"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radiossets">$100 right
                                                <input type="radio" name="radio">
                                                <span class="checkmark-radio"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="location-set">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <div class="location-setcontent">
                                        <h5>Add Space Between Mony and Currency</h5>
                                        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <ul class="custom-radiosbtn form-group mb-0">
                                        <li>
                                            <label class="radiossets">Yes
                                                <input type="radio" checked="checked" name="radios">
                                                <span class="checkmark-radio"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radiossets">No
                                                <input type="radio" name="radios">
                                                <span class="checkmark-radio"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="location-set">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <div class="location-setcontent">
                                        <h5>Currency Converte</h5>
                                        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="active-switch toogle-primary">
                                        <label class="switch">
                                            <input type="checkbox" checked="">
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
                                        <h5>Exchange Rate</h5>
                                        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group mb-0">
                                        <select class="select">
                                            <option>Automatic</option>
                                            <option>Manual</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="location-set">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <div class="location-setcontent">
                                        <h5>Currency Convertor API</h5>
                                        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group mb-0">
                                        <select class="select">
                                            <option>Openexchangerates.org</option>
                                            <option>Closeexchangerates.org</option>
                                        </select>
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
        </div>
    </div>
@endsection
