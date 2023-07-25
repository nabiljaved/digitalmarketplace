<?php $page = 'provider-signup'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 mx-auto">
                    <div class="login-wrap">
                        <div class="login-back">
                            <a href="{{ url('/') }}"><i class="fa-solid fa-arrow-left me-2"></i> Back To Home</a>
                        </div>
                        <div class="login-header">
                            <div class="text-center">
                                <h3>Provider Signup</h3>
                            </div>
                        </div>

                        <!-- Signup Form -->
                        <form action="provider-dashboard">
                            <div class="form-group">
                                <label class="col-form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">E-mail</label>
                                <input type="email" class="form-control" placeholder="example@email.com">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="col-form-label">Phone Number</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg group_formcontrol"
                                            id="phone" name="phone" placeholder="(256) 789-6253">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label d-block">Password<span class="brief-bio float-end">Must
                                        be 8 characters at least</span></label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-input" placeholder="*************">
                                    <span class="toggle-password feather-eye"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label class="custom_check">
                                        <input type="checkbox" name="rememberme" class="rememberme">
                                        <span class="checkmark"></span>Remember Me
                                    </label>
                                </div>
                                <div class="col-6 text-end">
                                    <label class="custom_check">
                                        <input type="checkbox" name="loginotp" class="loginotp">
                                        <span class="checkmark"></span>Login with OTP
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 login-btn">Submit</button>
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
                        </form>
                        <!-- /Signup Form -->

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
