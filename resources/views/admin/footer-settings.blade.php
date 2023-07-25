<?php $page = 'footer-settings'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">

        @component('layout.partials.settingssidemenu')
        @endcomponent

        <div class="content w-100">

            @component('admin.components.settingspageheader')
                @slot('titleset')
                    Footer Settings
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-groupheads d-flex d-flex justify-content-between">
                                        <h2>Categories Widget</h2>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Title<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="Categories">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Category-view</label>
                                        <select class="select">
                                            <option>Orderby(ASC)</option>
                                            <option>ASC</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-0">
                                        <label>Category Count</label>
                                        <input type="text" class="form-control" placeholder="4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-groupheads d-flex d-flex justify-content-between">
                                        <h2>Links Widget</h2>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" placeholder="Quick Links">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-12">
                                                <h4 class="mb-0">About<span>(Max 6 only)</span></h4>
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
                                                <h4 class="mb-0">Contact Us</h4>
                                            </div>
                                            <div class="col-lg-8 col-sm-12">
                                                <input type="text" class="form-control"
                                                    value="https://truelysell@dreamguystech.com/contact">
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
                                    <div class="form-group-set mb-0">
                                        <div class="row align-items-center">
                                            <div class="col-lg-3 col-sm-6">
                                                <h4 class="mb-0">FAQ</h4>
                                            </div>
                                            <div class="col-lg-8 col-sm-12">
                                                <input type="text" class="form-control"
                                                    value="https://truelysell@dreamguystech.com/faq">
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
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-groupheads d-flex d-flex justify-content-between">
                                        <h2>Contact Widget</h2>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Title<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="Contact Us">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control"
                                            placeholder="367 Hillcrest Lane, Irvine, California, United States">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" placeholder="321 546 8764">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-0">
                                        <label>Email</label>
                                        <input type="text" class="form-control" placeholder="truelysell@example.com">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-groupheads d-flex d-flex justify-content-between">
                                        <h2>Social Widget</h2>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Title <span>(English)</span></label>
                                        <input type="text" class="form-control" placeholder="Quick Links">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-12">
                                                <h4 class="mb-0">Links <span>(Max 6 only)</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-3 col-sm-6">
                                                <h4 class="mb-0">Facebook</h4>
                                            </div>
                                            <div class="col-lg-8 col-sm-12">
                                                <input type="text" class="form-control" value="https://facebook.com">
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
                                                <h4 class="mb-0">Twitter</h4>
                                            </div>
                                            <div class="col-lg-8 col-sm-12">
                                                <input type="text" class="form-control" value="https://twitter.com">
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
                                                <h4 class="mb-0">Youtube</h4>
                                            </div>
                                            <div class="col-lg-8 col-sm-12">
                                                <input type="text" class="form-control" value="https://youtube.com">
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
                                                <h4 class="mb-0">Instagram</h4>
                                            </div>
                                            <div class="col-lg-8 col-sm-12">
                                                <input type="text" class="form-control" value="https://instagram.com">
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
                                    <div class="form-group-set mb-0">
                                        <div class="row align-items-center">
                                            <div class="col-lg-3 col-sm-6">
                                                <h4 class="mb-0">Google Plus</h4>
                                            </div>
                                            <div class="col-lg-8 col-sm-12">
                                                <input type="text" class="form-control"
                                                    value="https://googleplus.com">
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
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row add-headers">
                                <div class="col-12">
                                    <div class="form-groupheads d-flex d-flex justify-content-between">
                                        <h2>Copyright</h2>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Page Content <span>(English)</span></label>
                                        <input type="text" class="form-control" placeholder="@ 2023 Truelysell	">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-12">
                                                <h4 class="mb-0">Footer bottom links <span>(Max 3 only)</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group-set">
                                        <div class="row align-items-center">
                                            <div class="col-lg-3 col-sm-6">
                                                <h4 class="mb-0">Privacy</h4>
                                            </div>
                                            <div class="col-lg-8 col-sm-12">
                                                <input type="text" class="form-control"
                                                    value="https://truelysell.com/privacy">
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
                                                <h4 class="mb-0">Terms & Conditions</h4>
                                            </div>
                                            <div class="col-lg-8 col-sm-12">
                                                <input type="text" class="form-control"
                                                    value="https://truelysell.com/terms&conditions">
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
