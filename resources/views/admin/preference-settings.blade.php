<?php $page = 'preference-settings'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">

        @component('layout.partials.settingssidemenu')
        @endcomponent

        <div class="content w-100">

            @component('admin.components.settingspageheader')
                @slot('titleset')
                    Preference Settings
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="nav-menus mb-3">
                        <h4>Maintenance Mode</h4>
                        <div class="active-switch">
                            <label class="switch">
                                <input type="checkbox" checked="">
                                <span class="sliders round"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nav-menus mb-3">
                        <h4>Wallet</h4>
                        <div class="active-switch">
                            <label class="switch">
                                <input type="checkbox">
                                <span class="sliders round"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nav-menus mb-3">
                        <h4>Coupon</h4>
                        <div class="active-switch">
                            <label class="switch">
                                <input type="checkbox">
                                <span class="sliders round"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nav-menus mb-3">
                        <h4>Multilanguage</h4>
                        <div class="active-switch">
                            <label class="switch">
                                <input type="checkbox">
                                <span class="sliders round"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nav-menus mb-3">
                        <h4>Subscription</h4>
                        <div class="active-switch">
                            <label class="switch">
                                <input type="checkbox">
                                <span class="sliders round"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="nav-menus mb-3">
                        <h4>Chat</h4>
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
@endsection
