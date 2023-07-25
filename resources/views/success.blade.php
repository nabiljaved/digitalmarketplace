<?php $page = 'success'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">

                <!-- Password Success -->
                <div class="col-md-6 col-lg-6 mx-auto">
                    <div class="login-wrap">
                        <div class="login-back">
                            <a href="{{ url('/') }}"><img src="{{ URL::asset('/assets/img/icons/undo-icon.svg') }}"
                                    class="me-2" alt="icon">Back To Home</a>
                        </div>
                        <div class="otp-img">
                            <img src="{{ URL::asset('/assets/img/icons/tick-circle.svg') }}" alt="">
                        </div>
                        <div class="login-header">
                            <div class="log-form">
                                <h3>Success</h3>
                                <p>Your new password has been Successfully saved</p>
                            </div>
                        </div>

                        <form action="login">
                            <button class="btn btn-primary w-100 login-btn" type="submit">Verify & Proceed</button>
                        </form>
                    </div>
                </div>
                <!-- /Password Success -->

            </div>
        </div>
    </div>
@endsection
