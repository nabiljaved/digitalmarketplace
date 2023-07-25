<?php $page = 'cachesystem'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-7 col-sm-12 m-auto">

                    @component('admin.components.addpageheader')
                        @slot('addtitle')
                            Cache System
                        @endslot
                    @endcomponent

                    <div class="row">
                        <div class="col-12">
                            <div class="form-groupheads d-flex d-flex justify-content-between">
                                <h2>Service Cache System</h2>
                                <div class="active-switch toogle-primary d-flex align-items-center">
                                    <h6 class="fs-14">Enable</h6>
                                    <label class="switch">
                                        <input type="checkbox" checked="">
                                        <span class="sliders round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Refresh Cache Files When Database Changes</label>
                                <ul class="custom-radiosbtn">
                                    <li>
                                        <label class="radiossets">Yes
                                            <input type="radio" checked="checked" name="radio">
                                            <span class="checkmark-radio"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radiossets">No
                                            <input type="radio" name="radio">
                                            <span class="checkmark-radio"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Cache Refresh Time (Minute) <span>(After this time, your cache files will be
                                        refreshed.)</span></label>
                                <input type="text" class="form-control" placeholder="Enter Cache Refresh Time">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-groupheads d-flex d-flex justify-content-between">
                                <h2>Static Content Cache System</h2>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-groupheads d-flex d-flex justify-content-between">
                                <h2 class="fs-14">Status</h2>
                                <div class="active-switch toogle-primary d-flex align-items-center">
                                    <h6 class="fs-14">Enable</h6>
                                    <label class="switch">
                                        <input type="checkbox" checked="">
                                        <span class="sliders round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="btn-path">
                                <a href="javascript:void(0);" class="btn btn-primary me-3"> Save</a>
                                <a href="javascript:void(0);" class="btn btn-cancel ">Reset</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
