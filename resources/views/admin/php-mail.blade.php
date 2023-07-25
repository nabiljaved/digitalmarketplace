<?php $page = 'php-mail'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="main-wrapper">
        <div class="change-password">
            <div class="change-passwordback">
                <a href="{{ url('admin/email-settings') }}"><i class="fe fe-arrow-left me-2"></i>Back </a>
            </div>
            <div class="change-passwordhead d-flex justify-content-between">
                <h3>PHPMail</h3>
                <div class="active-switch ">
                    <label class="switch">
                        <input type="checkbox" checked="">
                        <span class="sliders round"></span>
                    </label>
                </div>
            </div>
            <form action="{{ url('admin/email-settings') }}">
                <div class="col-12">
                    <div class="form-group">
                        <label>Email From Address</label>
                        <input type="text" class="form-control" value="demo2">
                    </div>
                    <div class="form-group">
                        <label>Email Password</label>
                        <div class="form-icon">
                            <input type="password" class="form-control" value="*************">
                            <span><i class="fe fe-lock"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Emails From Name</label>
                        <input type="text" class="form-control" value="John Smith">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="btn-path">
                        <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
