<?php $page = 'storage-settings'; ?>
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
                            Storage
                        @endslot
                    @endcomponent

                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="nav-menus mb-3">
                                    <h4>Local Storage</h4>
                                    <div class="active-switch">
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="sliders round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="nav-menus mb-3">
                                    <h4>AWS Storage</h4>
                                    <div class="settings-view">
                                        <a href="{{ url('admin/aws-storage') }}"><i class="fe fe-settings"></i></a>
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
        </div>
    </div>
@endsection
