<?php $page = 'faq'; ?>
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
            <div class="maintenance-sec pb-0">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="maintenance-wrap">
                            <h2>We're Down For Maintenance</h2>
                            <p>Our website is currently undergoing scheduled maintenance, will be right back in a few
                                minutes.</p>
                            <div class="maintenance-icon">
                                <h6>We'll Be Back Shortly</h6>
                                <div class="social-icon media-icon">
                                    <ul>
                                        <li>
                                            <a href="javascript:;" target="_blank"><i class="feather-instagram"></i> </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" target="_blank"><i class="feather-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" target="_blank"><i class="feather-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" target="_blank"><i class="feather-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="{{ url('/') }}" class="btn btn-primary"><i
                                    class="feather-arrow-left-circle me-2"></i>Back to Home</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ URL::asset('/assets/img/maintenance.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
