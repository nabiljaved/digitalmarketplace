<?php $page = 'login-email'; ?>
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
                            <h3>Sign in</h3>
                            <p>We'll send a confirmation code to your email.</p>
                            <h6>Sign in with <a href="{{ url('login-phone1') }}">Phone Number</a></h6>
                        </div>

                        <!-- Login Form -->
                        <form action="user-dashboard">
                            <div class="log-form">
                                <div class="form-group">
                                    <label class="col-form-label">E-mail</label>
                                    <input type="text" class="form-control" value="example@email.com">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="custom_check">
                                            <input type="checkbox" name="rememberme" class="rememberme">
                                            <span class="checkmark"></span>Remember Me
                                        </label>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <label class="custom_check">
                                            <input type="checkbox" name="loginotp" class="loginotp">
                                            <span class="checkmark"></span>Login with OTP
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary w-100 login-btn" type="submit">Sign in</button>
                            <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or">Or, log in with your email</span>
                            </div>
                            <div class="social-login">
                                <a href="javascript:;" class="btn btn-google w-100"><img
                                        src="{{ URL::asset('/assets/img/icons/google.svg') }}" class="me-2"
                                        alt="img">Log in with Google</a>
                                <a href="javascript:;" class="btn btn-google w-100"><img
                                        src="{{ URL::asset('/assets/img/icons/fb.svg') }}" class="me-2" alt="img">Log
                                    in with Facebook</a>
                            </div>
                            <p class="no-acc">Don't have an account ? <a href="{{ url('choose-signup') }}">Sign up</a></p>
                        </form>
                        <!-- /Login Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
