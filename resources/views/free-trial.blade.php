<?php $page = 'free-trial'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 mx-auto">
                    <div class="login-wrap mw-100">
                        <div class="login-header text-center">
                            <h3>Start your free trial</h3>
                        </div>

                        <!-- Login Form -->
                        <form action="login">
                            <div class="form-group">
                                <label class="col-form-label">Company Name</label>
                                <input type="text" class="form-control" placeholder="Enter Company Name">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Domain</label>
                                <div class="input-group domain-grp">
                                    <input type="text" class="form-control" placeholder="Recipient's username"
                                        aria-describedby="basic">
                                    <span class="input-group-text" id="basic">.example.com</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">First Name</label>
                                        <input type="text" class="form-control" placeholder="Enter First Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Last Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Last Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Work Email</label>
                                <input type="text" class="form-control" placeholder="Enter Work Email">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-input" placeholder="*************">
                                    <span class="toggle-password feather-eye"></span>
                                </div>
                            </div>
                            <button class="btn btn-primary w-100 login-btn mb-0" type="submit">Register</button>
                        </form>
                        <!-- /Login Form -->

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
