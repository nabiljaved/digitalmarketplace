<?php $page = 'categories'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.backgroundimage')
    @endcomponent
    @component('components.breadcrumb')
        @slot('title')
            Categories
        @endslot
        @slot('li_1')
            Home
        @endslot
        @slot('li_2')
            Categories
        @endslot
    @endcomponent
    <div class="content">
        <div class="container">
            <div class="row">

                <!-- Category List -->
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="category-card flex-fill">
                        <div class="category-img">
                            <a href="{{ url('search') }}">
                                <img src="{{ URL::asset('/assets/img/services/service-06.jpg') }}" class="img-fluid"
                                    alt="">
                            </a>
                        </div>
                        <div class="category-info">
                            <div class="category-name">
                                <span class="category-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/category-01.svg') }}" alt="">
                                </span>
                                <h6><a href="{{ url('search') }}">Computer</a></h6>
                            </div>
                            <p>22 Services</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="category-card flex-fill">
                        <div class="category-img">
                            <a href="{{ url('search') }}">
                                <img src="{{ URL::asset('/assets/img/services/service-09.jpg') }}" class="img-fluid"
                                    alt="">
                            </a>
                        </div>
                        <div class="category-info">
                            <div class="category-name">
                                <span class="category-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/category-02.svg') }}" alt="">
                                </span>
                                <h6><a href="{{ url('search') }}">Cleaning</a></h6>
                            </div>
                            <p>22 Services</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="category-card flex-fill">
                        <div class="category-img">
                            <a href="{{ url('search') }}">
                                <img src="{{ URL::asset('/assets/img/services/service-01.jpg') }}" class="img-fluid"
                                    alt="">
                            </a>
                        </div>
                        <div class="category-info">
                            <div class="category-name">
                                <span class="category-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/category-03.svg') }}" alt="">
                                </span>
                                <h6><a href="{{ url('search') }}">Electrical</a></h6>
                            </div>
                            <p>22 Services</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="category-card flex-fill">
                        <div class="category-img">
                            <a href="{{ url('search') }}">
                                <img src="{{ URL::asset('/assets/img/services/service-10.jpg') }}" class="img-fluid"
                                    alt="">
                            </a>
                        </div>
                        <div class="category-info">
                            <div class="category-name">
                                <span class="category-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/category-04.svg') }}" alt="">
                                </span>
                                <h6><a href="{{ url('search') }}">Construction</a></h6>
                            </div>
                            <p>22 Services</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="category-card flex-fill">
                        <div class="category-img">
                            <a href="{{ url('search') }}">
                                <img src="{{ URL::asset('/assets/img/services/service-15.jpg') }}" class="img-fluid"
                                    alt="">
                            </a>
                        </div>
                        <div class="category-info">
                            <div class="category-name">
                                <span class="category-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/category-05.svg') }}" alt="">
                                </span>
                                <h6><a href="{{ url('search') }}">Interior</a></h6>
                            </div>
                            <p>22 Services</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="category-card flex-fill">
                        <div class="category-img">
                            <a href="{{ url('search') }}">
                                <img src="{{ URL::asset('/assets/img/services/service-08.jpg') }}" class="img-fluid"
                                    alt="">
                            </a>
                        </div>
                        <div class="category-info">
                            <div class="category-name">
                                <span class="category-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/category-06.svg') }}" alt="">
                                </span>
                                <h6><a href="{{ url('search') }}">Car Wash</a></h6>
                            </div>
                            <p>22 Services</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="category-card flex-fill">
                        <div class="category-img">
                            <a href="{{ url('search') }}">
                                <img src="{{ URL::asset('/assets/img/services/service-11.jpg') }}" class="img-fluid"
                                    alt="">
                            </a>
                        </div>
                        <div class="category-info">
                            <div class="category-name">
                                <span class="category-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/category-07.svg') }}" alt="">
                                </span>
                                <h6><a href="{{ url('search') }}">Plumbing</a></h6>
                            </div>
                            <p>22 Services</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="category-card flex-fill">
                        <div class="category-img">
                            <a href="{{ url('search') }}">
                                <img src="{{ URL::asset('/assets/img/services/service-03.jpg') }}" class="img-fluid"
                                    alt="">
                            </a>
                        </div>
                        <div class="category-info">
                            <div class="category-name">
                                <span class="category-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/category-08.svg') }}" alt="">
                                </span>
                                <h6><a href="{{ url('search') }}">Carpentry</a></h6>
                            </div>
                            <p>22 Services</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="category-card flex-fill">
                        <div class="category-img">
                            <a href="{{ url('search') }}">
                                <img src="{{ URL::asset('/assets/img/services/service-16.jpg') }}" class="img-fluid"
                                    alt="">
                            </a>
                        </div>
                        <div class="category-info">
                            <div class="category-name">
                                <span class="category-icon">
                                    <img src="{{ URL::asset('/assets/img/icons/category-09.svg') }}" alt="">
                                </span>
                                <h6><a href="{{ url('search') }}">Appliance</a></h6>
                            </div>
                            <p>22 Services</p>
                        </div>
                    </div>
                </div>
                <!-- /Category List -->

            </div>
        </div>
    </div>
@endsection
