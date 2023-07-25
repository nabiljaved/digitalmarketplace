<?php $page = 'site-information'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">

        @component('layout.partials.settingssidemenu')
        @endcomponent

        <div class="content w-100">

            @component('admin.components.settingspageheader')
                @slot('titleset')
                    Site Information
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-groupheads">
                                        <h2>Website Details</h2>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Website Name</label>
                                        <input type="text" placeholder="Enter Website Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-groupheads">
                                        <h3>Website Logo Lite</h3>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="upload-div">
                                        <div class="upload-sets">
                                            <div class="upload-sets-btn">
                                                <input type="file" id="imgInp">
                                                <a href="javascript:void(0);" class="btn btn-upload">Upload</a>
                                            </div>
                                            <p>Recommended Image Size is 300*100</p>
                                        </div>
                                        <div class="upload-img">
                                            <div class="upload-imgset">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/gallery.svg') }}"
                                                    alt="img" id="blah">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-groupheads">
                                        <h3>Fav Icon</h3>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="upload-div">
                                        <div class="upload-sets">
                                            <div class="upload-sets-btn">
                                                <input type="file" id="imgInpset">
                                                <a href="javascript:void(0);" class="btn btn-upload">Upload</a>
                                            </div>
                                            <p>Recommended Image Size is 50*50</p>
                                        </div>
                                        <div class="upload-img">
                                            <div class="upload-imgset">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/gallery.svg') }}"
                                                    alt="img" id="blahset">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-groupheads">
                                        <h3>Apple Icon</h3>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="upload-div mb-0">
                                        <div class="upload-sets">
                                            <div class="upload-sets-btn">
                                                <input type="file" id="imgInp1">
                                                <a href="javascript:void(0);" class="btn btn-upload">Upload</a>
                                            </div>
                                            <p>Recommended Image Size is 156*156</p>
                                        </div>
                                        <div class="upload-img">
                                            <div class="upload-imgset">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/gallery.svg') }}"
                                                    alt="img" id="blah1">
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
                                        <h2>Website Address</h2>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Contact Email</label>
                                        <input type="text" class="form-control" placeholder="Enter Email Address">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Contact Phone No</label>
                                        <input type="text" class="form-control" placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Address">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Country">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" class="form-control" placeholder="Enter Your State">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control" placeholder="Enter Your City">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Pincode</label>
                                        <input type="text" class="form-control"
                                            placeholder="Enter Your Pincode             ">
                                    </div>
                                </div>
                            </div>
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
