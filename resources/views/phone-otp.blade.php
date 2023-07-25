<?php $page = 'phone-otp'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">

                <!-- Phone Otp Form -->
                <div class="col-md-6 col-lg-6 mx-auto">
                    <div class="login-wrap otp-wrap">
                        <div class="login-back">
                            <a href="{{ url('/') }}"><img src="{{ URL::asset('/assets/img/icons/undo-icon.svg') }}"
                                    class="me-2" alt="icon">Back To Home</a>
                        </div>
                        <div class="otp-img">
                            <img src="{{ URL::asset('/assets/img/icons/phone-otp.svg') }}" alt="">
                        </div>
                        <div class="login-header">
                            <h3>Phone OTP Verification</h3>
                            <p>OTP sent to your mobile number ending <span>******9575</span></p>
                        </div>

                        <form action="login-phone">
                            <div class="form-group">
                                <div class="d-flex passcode-wrap digit-group passcode-verified">
                                    <input type="text" id="digit-1" name="digit-1" data-next="digit-2" value="4"
                                        maxlength="1">
                                    <input type="text" id="digit-2" name="digit-2" data-next="digit-3" value="8"
                                        data-previous="digit-1" maxlength="1">
                                    <input type="text" id="digit-3" name="digit-3" data-next="digit-4"
                                        data-previous="digit-2" maxlength="1">
                                    <input type="text" id="digit-4" name="digit-4" data-next="digit-5"
                                        data-previous="digit-3" maxlength="1">
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="time-expiry"><i class="feather-clock me-1"></i>00:25 secs</div>
                            </div>
                            <p class="no-acc">Didn't get the OTP? <a href="javascript:;">Resend OTP</a></p>
                            <button class="btn btn-primary w-100 login-btn mb-0" type="submit">Verify & Proceed</button>
                        </form>

                    </div>
                </div>
                <!-- /Phone Otp Form -->

            </div>

        </div>
    </div>
@endsection
