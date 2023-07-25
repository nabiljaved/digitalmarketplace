<?php $page = 'aws-storage'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="main-wrapper">
        <div class="change-password">
            <div class="change-passwordback">
                <a href="{{ url('admin/storage-settings') }}"><i class="fe fe-arrow-left me-2"></i>Back </a>
            </div>
            <div class="change-passwordhead d-flex justify-content-between">
                <h3>AWS Storage</h3>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>AWS Access Key</label>
                    <input type="text" class="form-control" placeholder="Enter AWS Access key">
                </div>
                <div class="form-group">
                    <label>AWS Secret Key</label>
                    <input type="text" class="form-control" placeholder="Enter API Secret Key">
                </div>
                <div class="form-group">
                    <label>Bucket Name</label>
                    <input type="text" class="form-control" placeholder="Enter Bucket Name">
                </div>
                <div class="form-group">
                    <label>Region</label>
                    <input type="text" class="form-control" placeholder="Enter Region">
                </div>
                <div class="form-group">
                    <label>AWS Base URL</label>
                    <input type="text" class="form-control" placeholder="Enter AWS URL">
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
