<?php $page = 'change-password'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 mx-auto">
                    <div class="login-wrap">
                        <div class="login-back">
                            <a href="{{ url('security-settings') }}"><i class="feather-arrow-left"></i> Back</a>
                        </div>
                        <div class="login-header">
                            <h3>Change Password</h3>
                            <p>Please enter your current password to change your password</p>
                        </div>

                        <!-- Reset Password Form -->
                        <form action="success">
                            <div class="form-group">
                                <label class="col-form-label">Current Password</label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-input" placeholder="*************">
                                    <span class="toggle-password feather-eye"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">New Password</label>
                                <div class="pass-group" id="passwordInput">
                                    <input type="password" class="form-control pass-input" placeholder="*************">
                                    <span class="toggle-password feather-eye"></span>
                                </div>
                                <div class="password-strength" id="passwordStrength">
                                    <span id="poor"></span>
                                    <span id="weak"></span>
                                    <span id="strong"></span>
                                    <span id="heavy"></span>
                                </div>
                                <div id="passwordInfo">Use 8 or more characters with a mix of letters, numbers & symbols.
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Confirm New Password</label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-input" placeholder="*************">
                                    <span class="toggle-password feather-eye"></span>
                                </div>
                            </div>
                            <div class="acc-submit">
                                <a href="javascript:;" class="btn btn-secondary">Cancel</a>
                                <button class="btn btn-primary" type="submit">Update Password</button>
                            </div>
                        </form>
                        <!-- /Reset Password Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
