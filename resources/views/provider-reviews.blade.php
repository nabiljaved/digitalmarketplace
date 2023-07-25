<?php $page = 'provider-reviews'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            @component('components.pageheader')
                @slot('title')
                    Reviews
                @endslot
            @endcomponent

            <!-- Coupons -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Review List -->
                    <div class="review-list">
                        <div class="review-imgs">
                            <a href="{{ url('service-details') }}"><img class="rounded img-fluid"
                                    src="{{ URL::asset('/assets/img/services/service-12.jpg') }}" alt=""></a>
                        </div>
                        <div class="review-info">
                            <h5>
                                <a href="{{ url('service-details') }}">Building Construction Services.</a>
                            </h5>
                            <div class="review-user">
                                <img class="avatar rounded-circle"
                                    src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}" alt=""> Jeffrey
                                Akridge,
                                <span class="review-date">July 11, 2023 11:38 am</span>
                            </div>
                        </div>
                        <div class="review-count">
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <div class="review-list">
                        <div class="review-imgs">
                            <a href="{{ url('service-details') }}"><img class="rounded img-fluid"
                                    src="{{ URL::asset('/assets/img/services/service-13.jpg') }}" alt=""></a>
                        </div>
                        <div class="review-info">
                            <h5>
                                <a href="{{ url('service-details') }}">Commercial Painting Services.</a>
                            </h5>
                            <div class="review-user">
                                <img class="avatar rounded-circle"
                                    src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}" alt=""> Nancy
                                Olson,
                                <span class="review-date">July 05, 2023 05:38 am</span>
                            </div>
                        </div>
                        <div class="review-count">
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <div class="review-list">
                        <div class="review-imgs">
                            <a href="{{ url('service-details') }}"><img class="rounded img-fluid"
                                    src="{{ URL::asset('/assets/img/services/service-14.jpg') }}" alt=""></a>
                        </div>
                        <div class="review-info">
                            <h5>
                                <a href="{{ url('service-details') }}">Plumbing Services.</a>
                            </h5>
                            <div class="review-user">
                                <img class="avatar rounded-circle"
                                    src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg') }}" alt=""> Ramona
                                Kingsley,
                                <span class="review-date">July 29, 2023 10:38 am</span>
                            </div>
                        </div>
                        <div class="review-count">
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <div class="review-list">
                        <div class="review-imgs">
                            <a href="{{ url('service-details') }}"><img class="rounded img-fluid"
                                    src="{{ URL::asset('/assets/img/services/service-15.jpg') }}" alt=""></a>
                        </div>
                        <div class="review-info">
                            <h5>
                                <a href="{{ url('service-details') }}">Wooden Carpentry Work.</a>
                            </h5>
                            <div class="review-user">
                                <img class="avatar rounded-circle"
                                    src="{{ URL::asset('/assets/img/profiles/avatar-04.jpg') }}" alt=""> Ricardo
                                Lung,
                                <span class="review-date">July 26, 2023 2:22 am</span>
                            </div>
                        </div>
                        <div class="review-count">
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <div class="review-list">
                        <div class="review-imgs">
                            <a href="{{ url('service-details') }}"><img class="rounded img-fluid"
                                    src="{{ URL::asset('/assets/img/services/service-16.jpg') }}" alt=""></a>
                        </div>
                        <div class="review-info">
                            <h5>
                                <a href="{{ url('service-details') }}">Air Conditioner Service.</a>
                            </h5>
                            <div class="review-user">
                                <img class="avatar rounded-circle"
                                    src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg') }}" alt=""> Annette
                                Silva,
                                <span class="review-date">July 13, 2023 17:38 am</span>
                            </div>
                        </div>
                        <div class="review-count">
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <div class="review-list">
                        <div class="review-imgs">
                            <a href="{{ url('service-details') }}"><img class="rounded img-fluid"
                                    src="{{ URL::asset('/assets/img/services/service-17.jpg') }}" alt=""></a>
                        </div>
                        <div class="review-info">
                            <h5>
                                <a href="{{ url('service-details') }}">Toughened Glass Fitting Services.</a>
                            </h5>
                            <div class="review-user">
                                <img class="avatar rounded-circle"
                                    src="{{ URL::asset('/assets/img/profiles/avatar-06.jpg') }}" alt=""> Stephen
                                Wilson,
                                <span class="review-date">July 10, 2023 17:18 pm</span>
                            </div>
                        </div>
                        <div class="review-count">
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <div class="review-list">
                        <div class="review-imgs">
                            <a href="{{ url('service-details') }}"><img class="rounded img-fluid"
                                    src="{{ URL::asset('/assets/img/services/service-18.jpg') }}" alt=""></a>
                        </div>
                        <div class="review-info">
                            <h5>
                                <a href="{{ url('service-details') }}">Car Repair Services.</a>
                            </h5>
                            <div class="review-user">
                                <img class="avatar rounded-circle"
                                    src="{{ URL::asset('/assets/img/profiles/avatar-07.jpg') }}" alt=""> Ryan
                                Rodriguez,
                                <span class="review-date">July 10, 2023 14:38 pm</span>
                            </div>
                        </div>
                        <div class="review-count">
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <!-- /Review List -->

                    @component('components.pagination')
                    @endcomponent
                </div>
            </div>
            <!-- /Coupons -->

        </div>
    </div>

    @component('components.model-popup')
    @endcomponent
@endsection
