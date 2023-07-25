<?php $page = 'coming-soon'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.backgroundimage')
    @endcomponent

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-wrap text-center">
                        <div class="error-logo mb-0">
                            <a href="{{ url('/') }}"><img class="img-fluid" src="{{ URL::asset('/assets/img/logo.svg') }}"
                                    alt="img"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="maintenance-sec">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="maintenance-wrap">
                            <h2>We’re getting ready to launch</h2>
                            <p>We'll be here soon with our new awesome site, subscribe to be notified.</p>
                            <div class="email-notify">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-info">
                                            <input type="text" class="form-control"
                                                placeholder="Enter your Email Address">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Notify Me</button>
                                    </div>
                                </div>
                            </div>
                            <h6>Coming Soon</h6>
                            <div class="countdown-container">
                                <div id="days" class="countdown-el days-c">
                                    <p>90</p>
                                    <span>Days</span>
                                </div>
                                <div id="hours" class="countdown-el hours-c">
                                    <p>21</p>
                                    <span>Hours</span>
                                </div>
                                <div id="mins" class="countdown-el mins-c">
                                    <p>30</p>
                                    <span>Minutes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="{{ URL::asset('/assets/img/coming-soon.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="coming-back">
                        <p>We'll Be Back Shortly</p>
                        <div class="social-icon media-icon">
                            <ul>
                                <li>
                                    <a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i> </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class="fa-brands fa-google"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
