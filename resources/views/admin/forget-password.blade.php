<?php $page = 'forget-password'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="main-wrapper">
        <div class="login-pages">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="login-logo">
                            <img src="{{ URL::asset('/admin_assets/img/logo-login.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7">
                        <div class="login-images">
                            <img src="{{ URL::asset('/admin_assets/img/login-banner.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <div class="login-content">
                            <div class="login-contenthead">
                                <h5>Forgot password?</h5>
                                <h6>Don’t warry! it happens. Please enter the address
                                    associated with your account.</h6>
                            </div>
                            <div class="login-input">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="text" class="form-control" placeholder="example@email.com">
                                </div>
                            </div>
                            <div class="login-button">
                                <a href="{{ url('admin/signin') }}" class="btn btn-login">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
