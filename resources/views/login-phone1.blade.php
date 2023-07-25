<?php $page = 'login-phone1'; ?>
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
                            <h3>Login</h3>
                            <p>We'll send a confirmation code to your Phone.</p>
                            <h6>Login with <a href="{{ url('login-email') }}">Email</a></h6>
                        </div>

                        <!-- Login Form -->
                        <form action="patient-email">
                            <div class="log-form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="col-form-label">Phone Number</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg group_formcontrol"
                                                id="phone" name="phone" placeholder="(256) 789-6253">
                                        </div>
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
                            </div>
                            <button class="btn btn-primary w-100 login-btn" type="submit">Login</button>
                            <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or">Or, Login with your email</span>
                            </div>
                            <div class="social-login">
                                <a href="javascript:;" class="btn btn-google w-100"><img
                                        src="{{ URL::asset('/assets/img/icons/google.svg') }}" class="me-2"
                                        alt="img">Login with Google</a>
                                <a href="javascript:;" class="btn btn-google w-100"><img
                                        src="{{ URL::asset('/assets/img/icons/fb.svg') }}" class="me-2"
                                        alt="img">Login with Facebook</a>
                            </div>
                            <p class="no-acc">Don't have an account ? <a href="javascript:;">Register</a></p>
                        </form>
                        <!-- /Login Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
