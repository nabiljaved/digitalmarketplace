<?php $page = 'payment-gateways'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">

        @component('layout.partials.settingssidemenu')
        @endcomponent

        <div class="content w-100">

            @component('admin.components.settingspageheader')
                @slot('titleset')
                    Payment Gateways
                @endslot
            @endcomponent

            <div class="row ">
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="nav-menus location-set">
                        <img src="{{ URL::asset('/admin_assets/img/company/paypal.png') }}" alt="img">
                        <div class="settings-view">
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                            <a href="{{ url('admin/paypal') }}" class="ms-3 me-0"><i class="fe fe-settings"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="nav-menus location-set">
                        <img src="{{ URL::asset('/admin_assets/img/company/stripe.png') }}" alt="img">
                        <div class="settings-view">
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                            <a href="{{ url('admin/paypal') }}" class="ms-3 me-0"><i class="fe fe-settings"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="nav-menus location-set">
                        <img src="{{ URL::asset('/admin_assets/img/company/mercoda.png') }}" alt="img">
                        <div class="settings-view">
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                            <a href="{{ url('admin/paypal') }}" class="ms-3 me-0"><i class="fe fe-settings"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="nav-menus location-set">
                        <img src="{{ URL::asset('/admin_assets/img/company/razorpay.png') }}" alt="img">
                        <div class="settings-view">
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                            <a href="{{ url('admin/paypal') }}" class="ms-3 me-0"><i class="fe fe-settings"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="nav-menus location-set">
                        <img src="{{ URL::asset('/admin_assets/img/company/pay.png') }}" alt="img">
                        <div class="settings-view">
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                            <a href="{{ url('admin/paypal') }}" class="ms-3 me-0"><i class="fe fe-settings"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="nav-menus location-set">
                        <img src="{{ URL::asset('/admin_assets/img/company/paystack.png') }}" alt="img">
                        <div class="settings-view">
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                            <a href="{{ url('admin/paypal') }}" class="ms-3 me-0"><i class="fe fe-settings"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="nav-menus location-set">
                        <img src="{{ URL::asset('/admin_assets/img/company/cod.png') }}" alt="img">
                        <div class="settings-view">
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                            <a href="{{ url('admin/paypal') }}" class="ms-3 me-0"><i class="fe fe-settings"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="nav-menus location-set">
                        <img src="{{ URL::asset('/admin_assets/img/company/bank-transfer.png') }}" alt="img">
                        <div class="settings-view">
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                            <a href="{{ url('admin/paypal') }}" class="ms-3 me-0"><i class="fe fe-settings"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="nav-menus location-set">
                        <img src="{{ URL::asset('/admin_assets/img/company/midtrans.png') }}" alt="img">
                        <div class="settings-view">
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                            <a href="{{ url('admin/paypal') }}" class="ms-3 me-0"><i class="fe fe-settings"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="nav-menus location-set">
                        <img src="{{ URL::asset('/admin_assets/img/company/flutterwave.png') }}" alt="img">
                        <div class="settings-view">
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                            <a href="{{ url('admin/paypal') }}" class="ms-3 me-0"><i class="fe fe-settings"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="nav-menus location-set">
                        <img src="{{ URL::asset('/admin_assets/img/company/checkout.png') }}" alt="img">
                        <div class="settings-view">
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                            <a href="{{ url('admin/paypal') }}" class="ms-3 me-0"><i class="fe fe-settings"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="nav-menus location-set">
                        <img src="{{ URL::asset('/admin_assets/img/company/payu.png') }}" alt="img">
                        <div class="settings-view">
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                            <a href="{{ url('admin/paypal') }}" class="ms-3 me-0"><i class="fe fe-settings"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="nav-menus location-set">
                        <img src="{{ URL::asset('/admin_assets/img/company/paytm.png') }}" alt="img">
                        <div class="settings-view">
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                            <a href="{{ url('admin/paypal') }}" class="ms-3 me-0"><i class="fe fe-settings"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="btn-path">
                        <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Update</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
