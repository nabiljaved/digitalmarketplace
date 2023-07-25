<?php $page = 'membarship-addons'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">
            <form action="{{ url('admin/membership') }}">

                @component('admin.components.addpageheader')
                    @slot('addtitle')
                        Membership Addons
                    @endslot
                @endcomponent

                <div class="row">
                    <div class="col-lg-7">
                        <div class="form-group">
                            <label>Addon Name</label>
                            <input type="text" class="form-control" placeholder="Enter Addon Name ">
                        </div>
                    </div>
                </div>
                <div class="content-page-header mt-3">
                    <h5>Addon Settings</h5>
                </div>
                <div class="location-set">
                    <div class="row ">
                        <div class="col-lg-6 col-12">
                            <div class="location-setcontent">
                                <h5>Services</h5>
                                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="0-100">
                                <div class="filter-checkbox mt-2">
                                    <ul>
                                        <li>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span><i></i></span>
                                                <b class="check-content">Unlimited</b>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-12">
                            <div class="active-switch text-end">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="location-set">
                    <div class="row ">
                        <div class="col-lg-6 col-12">
                            <div class="location-setcontent">
                                <h5>Appointments</h5>
                                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="0-100">
                                <div class="filter-checkbox mt-2">
                                    <ul>
                                        <li>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span><i></i></span>
                                                <b class="check-content">Unlimited</b>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-12">
                            <div class="active-switch text-end">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="location-set">
                    <div class="row ">
                        <div class="col-lg-6 col-12">
                            <div class="location-setcontent">
                                <h5>Staffs</h5>
                                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="0-100">
                                <div class="filter-checkbox mt-2">
                                    <ul>
                                        <li>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span><i></i></span>
                                                <b class="check-content">Unlimited</b>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-12">
                            <div class="active-switch text-end">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="btn-path">
                        <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                        <button type="submit" class="btn btn-primary ">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
