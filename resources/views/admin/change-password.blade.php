<?php $page = 'change-password'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="change-password">
        <div class="change-passwordback">
            <a href="{{ url('admin/security') }}"><i class="fe fe-arrow-left me-2"></i>Back to Dashboard </a>
        </div>
        <div class="change-passwordhead">
            <h3>Change Password</h3>
            <p>Please enter your current password to change your password</p>
        </div>
        <div class="change-passwordform">
            <div class="form-group">
                <label>Current Password</label>
                <div class="pass-group">
                    <input type="password" class="form-control pass-input">
                    <span class="fas toggle-password fa-eye-slash"></span>
                </div>
            </div>
            <div class="form-group">
                <label>New Password</label>
                <div class="pass-group" id="passwordInput">
                    <input type="password" class="form-control pass-inputs">
                    <span class="fas toggle-passwords fa-eye-slash"></span>
                </div>
                <div class="password-strength" id="passwordStrength">
                    <span id="poor"></span>
                    <span id="weak"></span>
                    <span id="strong"></span>
                    <span id="heavy"></span>
                </div>
                <div id="passwordInfo"></div>
            </div>
            <div class="form-group">
                <label>New Password</label>
                <div class="pass-group">
                    <input type="password" class="form-control pass-inputa">
                    <span class="fas toggle-passworda fa-eye-slash"></span>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="btn-path">
                <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                <a href="javascript:void(0);" class="btn btn-primary">Update Password</a>
            </div>
        </div>
    </div>
@endsection
