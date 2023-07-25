<?php $page = 'customer-booking-calendar'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">

                @component('components.customermenu')
                @endcomponent

                <div class="col-md-8 col-lg-9">

                    <!-- Sort -->
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="widget-title">
                                <h4>Booking List</h4>
                            </div>
                        </div>

                        <div class="col-md-8 d-flex align-items-center justify-content-md-end flex-wrap">
                            <div class="review-sort me-2">
                                <p>Sort</p>
                                <select class="select">
                                    <option>A -> Z</option>
                                    <option>Most helful</option>
                                </select>
                            </div>
                            <div class="grid-listview">
                                <ul>
                                    <li>
                                        <a href="{{ url('customer-favourite') }}" class="active">
                                            <i class="feather-calendar"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img src="{{ URL::asset('/assets/img/icons/filter-icon.svg') }}" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('customer-favourite') }}">
                                            <i class="feather-grid"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('customer-booking') }}">
                                            <i class="feather-list"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Sort -->

                    <div id="calendar-book"></div>

                </div>

            </div>

        </div>
    </div>
    @component('components.model-popup')
    @endcomponent
@endsection
