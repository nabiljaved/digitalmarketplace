<?php $page = 'reset-password'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 mx-auto">
                    <div class="login-wrap">
                        <div class="login-back">
                            <a href="{{ url('/') }}"><img src="{{ URL::asset('/assets/img/icons/undo-icon.svg') }}"
                                    class="me-2" alt="icon">Back To Home</a>
                        </div>
                        <div class="login-header">
                            <h3>Reset Password</h3>
                            <p>Your new password must be different from previous used passwords.</p>
                        </div>

                        <!-- Reset Password Form -->
                        <form action="success">
                            <div class="log-form">
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
                                    <div id="passwordInfo">Use 8 or more characters with a mix of letters, numbers &
                                        symbols.</div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Confirm Password</label>
                                    <div class="pass-group">
                                        <input type="password" class="form-control pass-input" placeholder="*************">
                                        <span class="toggle-password feather-eye"></span>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary w-100 login-btn" type="submit">Save Change</button>
                        </form>
                        <!-- /Reset Password Form -->

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
