<?php $page = 'nexmo'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="main-wrapper">
        <div class="change-password">
            <div class="change-passwordback">
                <a href="{{ url('admin/sms-settings') }}"><i class="fe fe-arrow-left me-2"></i>Back </a>
            </div>
            <div class="change-passwordhead d-flex justify-content-between">
                <h3>Nexmo</h3>
                <div class="active-switch ">
                    <label class="switch">
                        <input type="checkbox" checked="">
                        <span class="sliders round"></span>
                    </label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>API Key</label>
                    <input type="text" class="form-control" placeholder="Enter API key">
                </div>
                <div class="form-group">
                    <label>API Secret Key</label>
                    <input type="text" class="form-control" placeholder="Enter API Secret Key">
                </div>
                <div class="form-group">
                    <label>Sender ID</label>
                    <input type="text" class="form-control" placeholder="Enter API Sender ID">
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
@endsection
