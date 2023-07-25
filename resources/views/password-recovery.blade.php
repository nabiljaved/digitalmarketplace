<?php $page = 'password-recovery'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">

                <!-- Password Recovery -->
                <div class="col-md-6 col-lg-6 mx-auto">
                    <div class="login-wrap">
                        <div class="login-back">
                            <a href="{{ url('/') }}"><img src="{{ URL::asset('/assets/img/icons/undo-icon.svg') }}"
                                    class="me-2" alt="icon">Back To Home</a>
                        </div>
                        <div class="login-header">
                            <h3>Password Recovery</h3>
                            <p>Enter your email and we will send you a link to reset your password.</p>
                        </div>

                        <form action="reset-password">
                            <div class="log-form">
                                <div class="form-group">
                                    <label class="col-form-label">E-mail</label>
                                    <input type="text" class="form-control" placeholder="example@email.com">
                                </div>
                            </div>
                            <button class="btn btn-primary w-100 login-btn" type="submit">Submit</button>
                            <div class="social-login">
                                <a href="{{ url('login') }}" class="btn btn-secondary w-100 fw-bold">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Password Recovery -->

            </div>

        </div>
    </div>
@endsection
