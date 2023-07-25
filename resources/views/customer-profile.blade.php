<?php $page = 'customer-profile'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">

                @component('components.customermenu')
                @endcomponent

                <div class="col-md-8 col-lg-9">
                    <div class="widget-title">
                        <h4>Account Settings</h4>
                    </div>
                    <h6 class="user-title">Profile Picture</h6>
                    <div class="pro-picture">
                        <div class="pro-img">
                            <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}" alt="user">
                        </div>
                        <div class="pro-info">
                            <div class="d-flex">
                                <div class="img-upload">
                                    <i class="feather-upload-cloud me-1"></i>Upload
                                    <input type="file">
                                </div>
                                <a href="javascript:;" class="btn btn-remove">Remove</a>
                            </div>
                            <p>*image size should be at least 320px big,and less then 500kb. Allowed files .png and .jpg.
                            </p>
                        </div>
                    </div>
                    <h6 class="user-title">General Information</h6>
                    <div class="general-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">User Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your user name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Email Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Mobile Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Mobile Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Gender</label>
                                    <select class="select">
                                        <option>Select Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Date of birth</label>
                                    <div class="form-icon">
                                        <input type="text" class="form-control datetimepicker" placeholder="DD/MM/YYYY">
                                        <span class="cus-icon"><i class="feather-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-form-label d-block">Your Bio <span class="brief-bio float-end">Brief
                                            description for your profile. URLs are hyperlinked.</span></label>
                                    <textarea class="form-control" rows="5" placeholder="Add a Short Bio....."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="user-title">Address </h6>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-form-label">Address<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter your address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Country<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter your state">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">State<span class="text-danger">*</span></label>
                                <input type="email" class="form-control" placeholder="Enter your state">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">City<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter your city">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Postal Code<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter your postal code">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Currency Code</label>
                                <select class="select">
                                    <option>Choose Currency</option>
                                    <option>Eur</option>
                                    <option>Aud</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Language<span class="text-danger">*</span></label>
                                <input class="input-tags form-control" type="text" data-role="tagsinput"
                                    name="specialist" value="English,French" id="specialist">
                            </div>
                        </div>
                    </div>
                    <div class="acc-submit">
                        <a href="javascript:;" class="btn btn-secondary">Cancel</a>
                        <a href="javascript:;" class="btn btn-primary">Save Changes</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
    @component('components.model-popup')
    @endcomponent
@endsection
