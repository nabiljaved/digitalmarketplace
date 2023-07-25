<?php $page = 'account-settings'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">

        @component('layout.partials.settingssidemenu')
        @endcomponent

        <div class="content w-100">

            @component('admin.components.settingspageheader')
                @slot('titleset')
                    Account Settings
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-grouphead">
                        <h2>Profile Picture</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="profile-upload">
                        <div class="profile-upload-img">
                            <img src="{{ URL::asset('/admin_assets/img/user.jpg') }}" alt="img"
                                id="blah">
                        </div>
                        <div class="profile-upload-content">
                            <div class="profile-upload-btn">
                                <div class="profile-upload-file">
                                    <input type="file" id="imgInp">
                                    <a href="javascript:void(0);" class="btn btn-upload">Upload</a>
                                </div>
                                <a href="javascript:void(0);" class="btn btn-remove">Remove</a>
                            </div>
                            <div class="profile-upload-para">
                                <p>*image size should be at least 320px big,and less then 500kb. Allowed files .png and
                                    .jpg.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-grouphead">
                        <h2>Profile</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Enter your name">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" class="form-control" placeholder="Enter your user name">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Enter your Email">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="text" class="form-control" placeholder="Enter your Number">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Bio</label>
                        <textarea class="form-control" placeholder="Add a Short Bio....."></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-grouphead">
                        <h2>Personal Information</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="Enter your Address">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" placeholder="Enter your Country">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label>State</label>
                        <input type="text" class="form-control" placeholder="Enter your State">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="Enter your City">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="form-group">
                        <label>Pincode</label>
                        <input type="text" class="form-control" placeholder="Enter your Pincode">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Language</label>
                        <input class="input-tags form-control" type="text" data-role="tagsinput" name="specialist"
                            value="English,French,Spanish" id="specialist">
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
