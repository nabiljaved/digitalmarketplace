<?php $page = 'providers'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Providers
        @endslot
    @endcomponent

    <!-- Content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset">
                        <div class="providerset-img">
                            <a href="{{ url('provider-details') }}">
                                <img src="{{ URL::asset('/assets/img/provider/provider-11.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="providerset-content">
                            <div class="providerset-price">
                                <div class="providerset-name">
                                    <h4><a href="{{ url('provider-details') }}">John Smith</a><i class="fa fa-check-circle"
                                            aria-hidden="true"></i></h4>
                                    <span>Electrician</span>
                                </div>
                                <div class="providerset-prices">
                                    <h6>$20.00<span>/hr</span></h6>
                                </div>
                            </div>
                            <div class="provider-rating">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset">
                        <div class="providerset-img">
                            <a href="{{ url('provider-details') }}">
                                <img src="{{ URL::asset('/assets/img/provider/provider-12.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="providerset-content">
                            <div class="providerset-price">
                                <div class="providerset-name">
                                    <h4><a href="{{ url('provider-details') }}">Michael</a><i class="fa fa-check-circle"
                                            aria-hidden="true"></i></h4>
                                    <span>Carpenter</span>
                                </div>
                                <div class="providerset-prices">
                                    <h6>$50.00<span>/hr</span></h6>
                                </div>
                            </div>
                            <div class="provider-rating">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i><span>(228)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset">
                        <div class="providerset-img">
                            <a href="{{ url('provider-details') }}">
                                <img src="{{ URL::asset('/assets/img/provider/provider-13.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="providerset-content">
                            <div class="providerset-price">
                                <div class="providerset-name">
                                    <h4><a href="{{ url('provider-details') }}">Antoinette</a><i class="fa fa-check-circle"
                                            aria-hidden="true"></i></h4>
                                    <span>Cleaner</span>
                                </div>
                                <div class="providerset-prices">
                                    <h6>$40.00<span>/hr</span></h6>
                                </div>
                            </div>
                            <div class="provider-rating">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i><span>(130)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset">
                        <div class="providerset-img">
                            <a href="{{ url('provider-details') }}">
                                <img src="{{ URL::asset('/assets/img/provider/provider-14.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="providerset-content">
                            <div class="providerset-price">
                                <div class="providerset-name">
                                    <h4><a href="{{ url('provider-details') }}">Thompson</a><i class="fa fa-check-circle"
                                            aria-hidden="true"></i></h4>
                                    <span>Mechanic</span>
                                </div>
                                <div class="providerset-prices">
                                    <h6>$70.00<span>/hr</span></h6>
                                </div>
                            </div>
                            <div class="provider-rating">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i><span>(95)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset">
                        <div class="providerset-img">
                            <a href="{{ url('provider-details') }}">
                                <img src="{{ URL::asset('/assets/img/provider/provider-15.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="providerset-content">
                            <div class="providerset-price">
                                <div class="providerset-name">
                                    <h4><a href="{{ url('provider-details') }}">Gloria</a><i class="fa fa-check-circle"
                                            aria-hidden="true"></i></h4>
                                    <span>Cleaner</span>
                                </div>
                                <div class="providerset-prices">
                                    <h6>$30.00<span>/hr</span></h6>
                                </div>
                            </div>
                            <div class="provider-rating">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset">
                        <div class="providerset-img">
                            <a href="{{ url('provider-details') }}">
                                <img src="{{ URL::asset('/assets/img/provider/provider-16.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="providerset-content">
                            <div class="providerset-price">
                                <div class="providerset-name">
                                    <h4><a href="{{ url('provider-details') }}">Lawrence</a><i class="fa fa-check-circle"
                                            aria-hidden="true"></i></h4>
                                    <span>Engineer</span>
                                </div>
                                <div class="providerset-prices">
                                    <h6>$45.00<span>/hr</span></h6>
                                </div>
                            </div>
                            <div class="provider-rating">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i><span>(228)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset">
                        <div class="providerset-img">
                            <a href="{{ url('provider-details') }}">
                                <img src="{{ URL::asset('/assets/img/provider/provider-17.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="providerset-content">
                            <div class="providerset-price">
                                <div class="providerset-name">
                                    <h4><a href="{{ url('provider-details') }}">Ellen</a><i class="fa fa-check-circle"
                                            aria-hidden="true"></i></h4>
                                    <span>Designer</span>
                                </div>
                                <div class="providerset-prices">
                                    <h6>$25.00<span>/hr</span></h6>
                                </div>
                            </div>
                            <div class="provider-rating">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i><span>(130)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset">
                        <div class="providerset-img">
                            <a href="{{ url('provider-details') }}">
                                <img src="{{ URL::asset('/assets/img/provider/provider-18.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="providerset-content">
                            <div class="providerset-price">
                                <div class="providerset-name">
                                    <h4><a href="{{ url('provider-details') }}">Nathaniel</a><i
                                            class="fa fa-check-circle" aria-hidden="true"></i></h4>
                                    <span>Plumber</span>
                                </div>
                                <div class="providerset-prices">
                                    <h6>$30.00<span>/hr</span></h6>
                                </div>
                            </div>
                            <div class="provider-rating">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i><span>(95)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset">
                        <div class="providerset-img">
                            <a href="{{ url('provider-details') }}">
                                <img src="{{ URL::asset('/assets/img/provider/provider-19.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="providerset-content">
                            <div class="providerset-price">
                                <div class="providerset-name">
                                    <h4><a href="{{ url('provider-details') }}">Nicholas</a><i class="fa fa-check-circle"
                                            aria-hidden="true"></i></h4>
                                    <span>Electrician</span>
                                </div>
                                <div class="providerset-prices">
                                    <h6>$20.00<span>/hr</span></h6>
                                </div>
                            </div>
                            <div class="provider-rating">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i><span>(320)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset">
                        <div class="providerset-img">
                            <a href="{{ url('provider-details') }}">
                                <img src="{{ URL::asset('/assets/img/provider/provider-20.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="providerset-content">
                            <div class="providerset-price">
                                <div class="providerset-name">
                                    <h4><a href="{{ url('provider-details') }}">Stephanie</a><i
                                            class="fa fa-check-circle" aria-hidden="true"></i></h4>
                                    <span>Carpenter</span>
                                </div>
                                <div class="providerset-prices">
                                    <h6>$40.00<span>/hr</span></h6>
                                </div>
                            </div>
                            <div class="provider-rating">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i><span>(228)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset">
                        <div class="providerset-img">
                            <a href="{{ url('provider-details') }}">
                                <img src="{{ URL::asset('/assets/img/provider/provider-21.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="providerset-content">
                            <div class="providerset-price">
                                <div class="providerset-name">
                                    <h4><a href="{{ url('provider-details') }}">Charles</a><i class="fa fa-check-circle"
                                            aria-hidden="true"></i></h4>
                                    <span>Serviceman</span>
                                </div>
                                <div class="providerset-prices">
                                    <h6>$55.00<span>/hr</span></h6>
                                </div>
                            </div>
                            <div class="provider-rating">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i><span>(130)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="providerset">
                        <div class="providerset-img">
                            <a href="{{ url('provider-details') }}">
                                <img src="{{ URL::asset('/assets/img/provider/provider-22.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="providerset-content">
                            <div class="providerset-price">
                                <div class="providerset-name">
                                    <h4><a href="{{ url('provider-details') }}">George</a><i class="fa fa-check-circle"
                                            aria-hidden="true"></i></h4>
                                    <span>Mechanic</span>
                                </div>
                                <div class="providerset-prices">
                                    <h6>$70.00<span>/hr</span></h6>
                                </div>
                            </div>
                            <div class="provider-rating">
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fa-solid fa-star-half-stroke filled"></i><span>(95)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="blog-pagination">
                        @component('components.pagination')
                        @endcomponent
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Content -->
@endsection
