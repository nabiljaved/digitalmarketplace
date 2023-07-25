<?php $page = 'header-settings'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">

        @component('layout.partials.settingssidemenu')
        @endcomponent

        <div class="content w-100">

            @component('admin.components.settingspageheader')
                @slot('titleset')
                    Header Settings
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-groupheads">
                                <h2>Nav Menus</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="nav-menus">
                                        <h4>Language</h4>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="nav-menus">
                                        <h4>Currency</h4>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="nav-menus">
                                        <h4>Stikcy header</h4>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-groupheads d-flex d-flex justify-content-between">
                                <h2>Header Menu</h2>
                                <div class="active-switch">
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="sliders round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row add-headers">
                                <div class="col-12">
                                    <div class="form-group-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-3 col-sm-6">
                                                <h4 class="mb-0">Home</h4>
                                            </div>
                                            <div class="col-lg-8 col-sm-12">
                                                <input type="text" class="form-control"
                                                    value="https://truelysell@dreamguystech.com/home">
                                            </div>
                                            <div class="col-lg-1 col-sm-12">
                                                <a href="javascript:void(0);" class="delete-links">
                                                    <i class="far fa-trash-alt "></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-3 col-sm-6">
                                                <h4 class="mb-0">About</h4>
                                            </div>
                                            <div class="col-lg-8 col-sm-12">
                                                <input type="text" class="form-control"
                                                    value="https://truelysell@dreamguystech.com/about">
                                            </div>
                                            <div class="col-lg-1 col-sm-12">
                                                <a href="javascript:void(0);" class="delete-links">
                                                    <i class="far fa-trash-alt "></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-3 col-sm-6">
                                                <h4 class="mb-0">Categories</h4>
                                            </div>
                                            <div class="col-lg-8 col-sm-12">
                                                <input type="text" class="form-control"
                                                    value="https://truelysell@dreamguystech.com/categories">
                                            </div>
                                            <div class="col-lg-1 col-sm-12">
                                                <a href="javascript:void(0);" class="delete-links">
                                                    <i class="far fa-trash-alt "></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-3 col-sm-6">
                                                <h4 class="mb-0">Blog</h4>
                                            </div>
                                            <div class="col-lg-8 col-sm-12">
                                                <input type="text" class="form-control"
                                                    value="https://truelysell@dreamguystech.com/blog">
                                            </div>
                                            <div class="col-lg-1 col-sm-12">
                                                <a href="javascript:void(0);" class="delete-links">
                                                    <i class="far fa-trash-alt "></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-3 col-sm-6">
                                                <h4 class="mb-0">Contact Us</h4>
                                            </div>
                                            <div class="col-lg-8 col-sm-12">
                                                <input type="text" class="form-control"
                                                    value="https://truelysell@dreamguystech.com/contactus">
                                            </div>
                                            <div class="col-lg-1 col-sm-12">
                                                <a href="javascript:void(0);" class="delete-links">
                                                    <i class="far fa-trash-alt "></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-3 col-sm-6">
                                                <h4 class="mb-0">Pages</h4>
                                            </div>
                                            <div class="col-lg-8 col-sm-12">
                                                <input type="text" class="form-control"
                                                    value="https://truelysell@dreamguystech.com/pages">
                                            </div>
                                            <div class="col-lg-1 col-sm-12">
                                                <a href="javascript:void(0);" class="delete-links">
                                                    <i class="far fa-trash-alt "></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="javascript:void(0);" class="addnewheader link-sets"><i
                                            class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add New</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="btn-path">
                            <a href="javascript:void(0);" class="btn btn-cancel me-3">Reset</a>
                            <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
