<?php $page = 'session-expired'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.backgroundimage')
    @endcomponent

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-wrap text-center">
                        <div class="error-logo">
                            <a href="{{ url('/') }}"><img class="img-fluid" src="{{ URL::asset('/assets/img/logo.svg') }}"
                                    alt="img"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="error-wrap">
                        <h2>Your Session has expired</h2>
                        <p>Please refresh the page. Don't worry, we kept all of you filters and breakdowns in place.</p>
                        <a href="{{ url('/') }}" class="btn btn-primary"><i
                                class="feather-arrow-left-circle me-2"></i>Back to Home</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="error-wrap">
                        <div class="error-img">
                            <img class="img-fluid" src="{{ URL::asset('/assets/img/session.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
