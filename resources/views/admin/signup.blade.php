<?php $page = 'signup'; ?>
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
                        <Form action="{{ route('signup.custom') }}" method="POST" class="account-content">
                            @csrf
                            <div class="login-content">
                                <div class="login-contenthead">
                                    <h5>Create an Account</h5>
                                    <h6>Continue where you left off</h6>
                                </div>
                                <div class="login-input">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" id="name"  class="form-control" placeholder="Enter your full name" name="name" value="{{old('name')}}">
                                        <div class="text-danger pt-2">
                                            @error('name')
                                                {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email address">
                                        <div class="text-danger pt-2">
                                            @error('email')
                                                {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label>Password</label>
                                        </div>
                                        <div class="pass-group">
                                            <input type="password" id="password" name="password" class="form-control pass-input" value="{{old('password')}}"placeholder="Enter your password">
                                            <span class="fas toggle-password fa-eye-slash"></span>
                                            <div class="text-danger pt-2">
                                                @error('password')
                                                    {{$message}}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-checkbox m-0">
                                        <ul class="d-flex justify-content-between">
                                            <li>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span><i></i></span>
                                                    <b class="check-content">Remember Me</b>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="login-button">
                                    <button class="btn btn-login">Register</button>
                                </div>
                                <div class="signinform text-center">
                                    <h4>Do have an account? <a href="{{ url('admin/signin') }}" class="hover-a">Sign in</a>
                                    </h4>
                                </div>
                            </div>
                        </Form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
